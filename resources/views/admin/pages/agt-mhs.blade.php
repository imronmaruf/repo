@extends('admin.main')
@section('isi')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Data Admin</h3>
                        <div class="mb-2">
                            <button type="button" class="btn mb-1 btn-primary btn-outline-success btn-xs" data-toggle="modal"
                                data-target="#tambahDataModal">
                                Tambah Data <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                            </button>

                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered mt-2 ">
                                {{-- zero-configuration = tambahin ini kalo perlu ya imron --}}
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Imron Mf</td>
                                        <td>200180139</td>
                                        <td>imron@gmail.com</td>
                                        <td>
                                            <input type="password" class="password-input" value="1234" readonly>
                                            <button type="button" class="password-toggle"
                                                onclick="togglePasswordVisibility(this)">
                                                <i class="fa fa-eye"></i>
                                            </button>

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
                                {{-- <tfoot>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </tfoot> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Isi form tambah data di sini -->
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" id="nim" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                class="form-control" placeholder="NIM" required>
                            {{-- <input type="text" class="form-control" id="nim" placeholder="NIM" required> --}}
                        </div>
                        <div class="form-group">
                            <label for="dosen">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"required>
                        </div>
                        <div class="form-group">
                            <label for="dosen">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
