@extends('admin.main')
@section('isi')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h3>Kategori</h3>
                        <!-- Input teks untuk kategori -->
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Tambah Nama Kategori" id="kategoriInput">
                            <div class="input-group-append">
                                <!-- Tombol tambah kategori -->
                                <button class="btn btn-primary" type="button" id="tambahKategoriBtn">Tambah</button>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <!-- Tabel untuk menampilkan data kategori -->
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Kategori</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Kerja Praktek
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-rounded btn-md">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-rounded btn-md">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Tugas Akhir
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-rounded btn-md">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-rounded btn-md">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
