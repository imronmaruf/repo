@extends('landings.main')
@section('isi')
    <!-- Daftar Tugas Akhir -->

    <section id="tugas-akhir" class="pt-4 p-lg-4 bg-light ">
        <div class="container">
            <h2 class="text-center mb-4">Repository Kerja Praktek</h2>
            <!-- Di sini bisa diletakkan kode untuk menampilkan daftar tugas akhir -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="input-group">
                                <input type="search" class="form-control rounded" placeholder="Cari" aria-label="Cari">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-list-group">
                                <div class="list-group">
                                    <a href="#"
                                        class="list-group-item list-group-item-action flex-column align-items-start ">
                                        <div class="d-flex w-100 justify-content-between ">
                                            <h5 class="mb-1 text-primary">Sistem Pendukung keputusan pada Universitas
                                                Malikussaleh
                                                menggunakan metode TOPSIS </h5><small>3 days ago</small>
                                        </div>
                                        <p class="mb-1 text-muted">Author : Sipaling SI</p>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action flex-column align-items-start ">
                                        <div class="d-flex w-100 justify-content-between ">
                                            <h5 class="mb-1 text-primary">Ini judul kerja praktek</h5><small>3 days
                                                ago</small>
                                        </div>
                                        <p class="mb-1 text-muted">Author : Sipaling SI</p>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action flex-column align-items-start ">
                                        <div class="d-flex w-100 justify-content-between ">
                                            <h5 class="mb-1 text-primary">Ini juga judul kerja praktek</h5><small>3 days
                                                ago</small>
                                        </div>
                                        <p class="mb-1 text-muted">Author : Sipaling SI</p>
                                    </a>
                                </div>
                            </div>

                            <div class="bootstrap-pagination mt-2 mb-2">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#"
                                                aria-label="Previous"><span aria-hidden="true">«</span> <span
                                                    class="sr-only">Previous</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                                    aria-hidden="true">»</span> <span class="sr-only">Next</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- 
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>Hak Cipta © 2023 Web Repository Tugas Akhir & Kerja Praktek. All Rights Reserved.</p>
        </div>
    </footer> --}}

    <!-- Link ke Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
