<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DosbingModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class DataDosbingController extends Controller
{
    function index()
    {
        $data = DosbingModel::all();
        return view('admin.pages.data_dosbing.index', ['data' => $data]);
    }

    function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'nip' => 'required|digits:18|unique:dosen_pembimbing,nip',
        ], [
            'nama.required' => 'Nama Harus Diisi',
            'nama.min' => 'Nama minimal 5 karakter',
            'nip.required' => 'NIP wajib diisi',
            'nip.digits' => 'NIP berisikan 18 digit',
            'nip.unique' => 'NIP sudah ada dalam basis data',

        ]);

        try {
            DosbingModel::create($request->all());
            Session::flash('success', 'Data Berhasil Ditambahkan');
            Alert::success('Sukses', 'Data Berhasil Ditambahkan');
        } catch (\Exception $error) {
            Alert::error('Error', 'Terjadi kesalahan saat menambahkan data');
        }

        return back();
    }

    function edit(Request $request, $id){
        $data = DosbingModel::find($id);

        $data->update([
            'nama'=> $request-> nama,
            'nip'=> $request-> nip,
        ]);

        return back();
    }
    function delete($id){
        DosbingModel::where('id', $id)-> delete();
        Session::flash('success', 'Data Berhasil dihapus');

        return back();


    }
}
