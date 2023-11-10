@extends('admin.main')
@section('isi')
    <div class="container-fluid mt-0">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <h3 class="card-title text-white">Kerja Praktek</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">4565</h2>
                            <p class="text-white mb-0">Total Laporan dan Proyek</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-cogs"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body">
                        <h3 class="card-title text-white">Tugas Akhir</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">8541</h2>
                            <p class="text-white mb-0">Total TGA dan Proyek</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-graduation-cap"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card gradient-3">
                    <div class="card-body">
                        <h3 class="card-title text-white">User</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">4565</h2>
                            <p class="text-white mb-0">Total User</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 ms-2 ">
                                <img src="{{ asset('logo-unimal-min.png') }}" alt="Deskripsi Gambar" width="100"
                                    height="150">
                            </div>
                            <div class="col-md-9 text-justify">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores repellendus
                                    molestiae
                                    exercitationem voluptatem tempora quo dolore nostrum dolor consequuntur itaque, alias
                                    fugit.
                                    Architecto rerum animi velit, beatae corrupti quos nam saepe asperiores aliquid quae
                                    culpa
                                    ea reiciendis ipsam numquam laborum aperiam. Id tempore consequuntur velit vitae
                                    corporis,
                                    aspernatur praesentium ratione! Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Aliquam delectus quam praesentium reprehenderit temporibus sint optio aspernatur
                                    quisquam commodi ipsa nulla cupiditate libero eos, ad minus magnam doloremque, dolor
                                    natus?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
