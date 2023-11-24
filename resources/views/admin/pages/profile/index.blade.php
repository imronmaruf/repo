@extends('admin.main')

@section('isi')
    {{-- Edit profile --}}

    <div class="row justify-content-center">

        <div class="col-lg-2 col-sm-10">
            <div class="card gradient-2-shadow">
                <div class="card-body">
                    <div class="text-center">
                        <div class="profile-set">
                            <img src="{{ asset('picture/accounts/' . Auth::user()->gambar) }}" height="90" width="90"
                                alt="">
                            <a href="#" data-toggle="modal" data-target="#editProfileModal">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        </div>

                        <div class="user-info">
                            @if (Auth::user()->role === 'admin')
                                <h5 class="mt-3 mb-1">{{ Auth::user()->fullname }}</h5>
                                <h6 class="user-email">{{ Auth::user()->email }}</h6>
                                <p class="label label-success">{{ Auth::user()->role }}</p>
                            @elseif (Auth::user()->role === 'user')
                                <h5 class="user-name">{{ Auth::user()->fullname }}</h5>
                                <h6 class="user-email">{{ Auth::user()->nim }}</h6>
                                <p class="label label-info">{{ Auth::user()->role }}</p>
                                <h6 class="user-email">{{ Auth::user()->email }}</h6>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Profile Saya</h4>
                    <div class="basic-form">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fullname">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="nip">Nomor Induk</label>
                                    <input type="text" class="form-control" id="nomorInduk" placeholder="Nomor Induk">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="hp">Hp.</label>
                                    <input type="text" class="form-control" id="hp" placeholder="Nomor Telepon">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="password">Password Baru</label>
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="konfirmasiPassword">Konfirmasi Password Baru</label>
                                    <input type="password" class="form-control" id="konfirmasiPassword"
                                        placeholder="Konfirmasi Password">
                                </div>

                                <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                                    <button type="submit" class="btn btn-dark mt-2">Update Profile</button>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="check2">
                                        <label class="form-check-label" for="check2">Konfirmasi profil baru </label>
                                    </div>
                                </div>

                            </div>
                        </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
