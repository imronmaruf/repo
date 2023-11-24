@extends('admin.main')
@section('isi')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="mb-2 ml-auto">
                    <button type="button" class="btn btn-primary btn-xs text-white" data-toggle="modal"
                        data-target="#tambahDataModal">
                        Tambah Data <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                    </button>
                </div>
                <div class="active-member">
                    <div class="table-responsive">
                        <table class="table table-xs mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>NIP/NIM</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $nomor = 1;
                                @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $nomor++ }}</td>
                                        <td>
                                            <img src="{{ asset('picture/accounts/' . $item->gambar) }}" class=""
                                                alt="">
                                            {{ $item->nama }}
                                        </td>
                                        <td>{{ $item->fullname }}</td>
                                        <td>{{ $item->nim }}</td>
                                        <td><span>{{ $item->email }}</span></td>
                                        <td><span>{{ $item->role }}</span></td>
                                        <td>
                                            @if ($item->email_verified_at)
                                                <span class="badge badge-success text-bold"> Active </span>
                                            @else
                                                <span class="badge badge-warning text-white text-bold">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="#" data-toggle="modal"
                                                data-target="#editModal{{ $item->id }}" type="button"
                                                class="btn btn-warning btn-rounded btn-sm text-white">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form onsubmit="return confirmHapus(event)"
                                                action="/hps-user/{{ $item->id }}" method="POST" class="d-inline">
                                                @csrf
                                                <button class="btn btn-danger btn-rounded btn-sm text-white">
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

    <!-- Modal tambah -->
    <div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tbhUser') }}" method="POST" enctype="multipart/form-data"
                        onsubmit="return showSuccessAlert()">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="fullname" required>
                        </div>
                        <div class="form-group">
                            <label for="nim">Nomor Induk</label>
                            <input type="text" class="form-control" placeholder="NIM/NIP" name="nim" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Email Mahasiswa Aktif " name="email"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>


                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control rounded" name="gambar" id="gambar" required>
                        </div>
                        <!-- Tampilkan pesan kesalahan validasi -->
                        @if (
                            $errors->has('fullname') ||
                                $errors->has('nim') ||
                                $errors->has('email') ||
                                $errors->has('password') ||
                                $errors->has('gambar'))
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                            </div>
                        @endif
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <button class="btn btn-primary" type="submit" id="tbhuserbtn">Tambah</button>
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
                        <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Data User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/edit-user/' . $item->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="fullname">Nama Lengkap</label>
                                <input type="text" class="form-control" id="fullname" name="fullname"
                                    value="{{ old('fullname', $item->fullname) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" class="form-control" id="nim" name="nim"
                                    value="{{ old('nim', $item->nim) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control" id="role" name="role">
                                    <option value="admin" {{ $item->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="user" {{ $item->role == 'user' ? 'selected' : '' }}>User</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary text-white">Simpan
                                    Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
