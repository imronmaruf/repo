<?php

namespace App\Http\Controllers;

use App\Mail\AuthMail;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    function index()
    {
        return view("auth.login");
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->email_verified_at != null) {
                if (Auth::user()->role === 'admin') {
                    return redirect()->route('admin')->with('success', 'Halo Admin, Anda berhasil login');
                } else if (Auth::user()->role === 'user') {
                    return redirect()->route('user')->with('success', 'Berhasil login');
                }
            } else {
                Auth::logout();
                return redirect()->route('auth')->withErrors('Akun Anda belum aktif. Harap verifikasi terlebih dahulu');
            }
        } else {
            return redirect()->route('auth')->withErrors('Email atau password salah');
        }
    }

    function create()
    {
        return view('auth.register');
    }

    function register(Request $request)
    {
        $str = Str::random(100);

        $request->validate([
            'fullname' => 'required|min:5',
            'nim' => 'required|digits:9',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6',
            'gambar' => 'required|image',
        ], [
            'fullname.required' => 'Nama lengkap wajib diisi',
            'fullname.min' => 'Nama lengkap minimal 5 karakter',
            'nim.required' => 'NIM wajib diisi',
            'nim.digits' => 'NIM berisikan 9 karakter angka',
            'email.required' => 'Email lengkap wajib diisi',
            'email.unique' => 'Email telah terdaftar',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
            'gambar.required' => 'Gambar wajib diupload',
            'gambar.image' => 'Gambar yang diupload harus berupa gambar',
        ]);

        $gambar_file = $request->file('gambar');
        $gambar_ekstensi = $gambar_file->extension();
        $nama_gambar = date('ymdhis') . "." . $gambar_ekstensi;
        $gambar_file->move(public_path('picture/accounts'), $nama_gambar);

        $inforegister = [
            'fullname' => $request->fullname,
            'nim' => $request->nim,
            'email' => $request->email,
            'password' => $request->password,
            'gambar' => $nama_gambar,
            'verify_key' => $str,
        ];

        User::create($inforegister);

        $details = [
            'nama' => $inforegister['fullname'],
            'nim' => $inforegister['nim'],
            'role' => 'user',
            'datetime' => date('Y-m-d H:i:s'),
            'website' => 'Web Repo Sistem Informasi',
            'url' => 'http://' . request()->getHttpHost() . "/" . "verify/" . $inforegister['verify_key'],
        ];

        Mail::to($inforegister['email'])->send(new AuthMail($details));

        return redirect()->route('auth')->with('success', 'Link verifikasi telah dikirim ke email Anda. Cek email untuk verifikasi');
    }

    function verify($verify_key)
    {
        $keyCheck = User::where('verify_key', $verify_key)->exists();

        if ($keyCheck) {
            User::where('verify_key', $verify_key)->update(['email_verified_at' => now()]);

            return redirect()->route('auth')->with('success', 'Verifikasi berhasil. Akun Anda sudah aktif');
        } else {
            return redirect()->route('auth')->withErrors('Kunci tidak valid. Pastikan telah melakukan registrasi')->withInput();
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
