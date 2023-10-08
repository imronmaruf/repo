@extends('admin.main')
@section('isi')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h3>Kategori</h3>

                        <form action="/tbh-kategori" method="POST">
                            <div class="input-group">
                                @csrf
                                <input type="text" class="form-control" placeholder="Tambah Nama Kategori"
                                    id="kategoriInput" name="kategori">
                                <div class="input-group-append">

                                    <button class="btn btn-primary" type="submit" id="tambahKategoriBtn"
                                        onclick="showSuccessAlert()">Tambah</button>
                                </div>
                            </div>
                        </form>
                        <div class="row mt-3">
                            <div class="col-lg-12">

                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Kategori</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $nomor = 1;
                                        @endphp
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $nomor++ }}</td>
                                                <td>{{ $item->kategori }}</td>
                                                <td>
                                                    <a href="{{ $item->id }}" data-toggle="modal"
                                                        data-target="#editModal{{ $item->id }}" type="button"
                                                        class="btn btn-warning btn-rounded btn-md text-white">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <form onsubmit="return confirmHapus(event)"
                                                        action="/hps-kategori/{{ $item->id }}" method="POST"
                                                        class="d-inline">
                                                        @csrf
                                                        <button class="btn btn-danger btn-rounded btn-md text-white">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    @foreach ($data as $item)
        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
            aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form Edit -->
                        <form action="/edit-kategori/{{ $item->id }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="kategoriEdit">Nama Kategori</label>
                                <input type="text" class="form-control" id="kategoriEdit" name="kategori"
                                    value="{{ $item->kategori }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="showSuccessAlert()">Simpan
                                Perubahan</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
