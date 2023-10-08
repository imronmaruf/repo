@extends('admin.main')
@section('isi')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Data Dosen Pembimbing</h3>
                        <div class="mb-2">
                            <button type="button" class="btn btn-primary btn-xs text-white" data-toggle="modal"
                                data-target="#tambahDataModal">
                                Tambah Data <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered mt-2 ">
                                {{-- zero-configuration = tambahin ini kalo perlu ya imron --}}
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIP</th>
                                        <th scope="col" class="col-sm-2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $nomor = 1;
                                    @endphp
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $nomor++ }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->nip }}</td>
                                            <td>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#editModal{{ $item->id }}" type="button"
                                                    class="btn btn-warning btn-rounded btn-md text-white">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form onsubmit="return confirmHapus(event)"
                                                    action="/hps-dosbing/{{ $item->id }}" method="POST"
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
                                <tfoot>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIP</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal tambah -->
    <div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Dosen Pembimbing</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="/tbh-dosbing" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Lengkap & Gelar</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap & Gelar"
                                name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP"
                                required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary text-white" id="tambahDosbingBtn">Tambah</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal edit -->
    @foreach ($data as $item)
        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
            aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Data Dosen Pembimbing</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="/edit-dosbing/{{ $item->id }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Lengkap & Gelar</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="{{ old($item->nama) }}" value="{{ $item->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" class="form-control" id="nip" name="nip"
                                    placeholder="{{ old($item->nip) }}" value="{{ $item->nip }}" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary text-white"
                                    onclick="showSuccessAlert()">Simpan Perubahan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
