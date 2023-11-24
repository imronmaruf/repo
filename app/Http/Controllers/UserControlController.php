<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\InfoUserMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class UserControlController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('admin.pages.user_control.index', ['data' => $data]);
    }

    function tbhUser(Request $request)
    {
        $verify_key = Str::random(100);

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

        $infotbhuser = [
            'fullname' => $request->fullname,
            'nim' => $request->nim,
            'email' => $request->email,
            'password' => $request->password,
            'gambar' => $nama_gambar,
            'verify_key' => $verify_key, 
        ];

        $user = User::create($infotbhuser);
        if ($request->role !== 'admin') {
            $user->email_verified_at = now();
            $user->save();
        }

        $details = [
            'nama' => $infotbhuser['fullname'],
            'nim' => $infotbhuser['nim'],
            'role' => 'user',
            'datetime' => date('Y-m-d H:i:s'),
            'website' => 'Web Repo Sistem Informasi',
            'url' => 'http://' . request()->getHttpHost() . '/auth',

        ];

        Mail::to($infotbhuser['email'])->send(new InfoUserMail($details));

        Alert::success('Success', 'Data Berhasil ditambahkan')->showConfirmButton('OK', '#3085d6');

        return redirect()->back();
    }


    public function edit(Request $request, $id)
    {
        $data = User::find($id);

        if (!$data) {
            return back()->with('error', 'Data tidak ditemukan');
        }
        $data->update([
            'fullname' => $request->fullname,
            'nim' => $request->nim,
            'role' => $request->role,
        ]);

        Alert::success('Success', 'Data Berhasil diubah')->showConfirmButton('OK', '#3085d6');
        return redirect()->back();
    }

    public function delete($id)
{
    $data = User::find($id);

    if (!$data) {
        return back()->with('error', 'Data tidak ditemukan');
    }

    $gambarPath = public_path('picture/accounts/' . $data->gambar);
    $data->delete();

    if (File::exists($gambarPath)) {
        File::delete($gambarPath);
    }

    Session::flash('success', 'Data Berhasil dihapus');
    return back()->with('success', 'Data Berhasil dihapus');
}
}
