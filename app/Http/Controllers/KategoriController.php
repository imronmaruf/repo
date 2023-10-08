<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;


class KategoriController extends Controller
{
    function index()
    {
        $data = KategoriModel::all();
        return view('admin.pages.kategori', ['data' => $data]);
    }
    
    function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|max:255',
        ]);

        try {
            KategoriModel::create($request->all());
            Session::flash('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            Alert::error('Gagal', 'Ada kesalahan saat menambahkan data');
        }

        return redirect('/kategori');
    }

    function edit(Request $request, $id)
    {
        $data = KategoriModel::find($id);

        $data->update([
            'kategori' => $request->kategori,
        ]);

        return redirect('/kategori')->with('success', 'Kategori berhasil di edit');
    }

    

    function delete($id)
    {
        KategoriModel::where('id', $id)->delete();
        Session::flash('success', 'Berhasil Hapus Data');
        return redirect('/kategori');
    }
}
