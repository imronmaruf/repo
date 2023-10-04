    @extends('landings.main')
    @section('isi')
        <!-- Header Start -->
        <div class="container-fluid hero-header bg-light ">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <h1 class="display-4 mb-3 animated slideInDown">Repository Kerja Praktek dan Tugas Akhir</h1>
                        <p class="animated slideInDown">Website ini bertujuan untuk memudahkan mahasiswa dan dosen untuk
                            melakukan pengarsipan laporan dan program kerja praktek dan tugas akhir, serta memudahkan
                            mahasiswa untuk mencari referensi dari penelitian terdahulu oleh mahasiswa Sistem Informasi.</p>
                        <a href="{{ route('registrasi') }}" class="btn btn-primary py-3 px-4 animated slideInDown">Gabung</a>
                    </div>
                    {{-- <div class="col-lg-6 animated fadeIn">
                        <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="img/hero-1.png"
                            alt="">
                    </div> --}}

                    <div class="col-lg-5 col-md-12">
                        <lottie-player src="https://lottie.host/d7e191c9-7a0a-41f7-b0b2-153a1ea7c4ad/hImcuDYPyb.json"
                            background="transparent" speed="1" style="width: 100%; max-width: 500px; height: auto;"
                            loop autoplay>
                        </lottie-player>
                        {{-- <iframe src="https://embed.lottiefiles.com/animation/71003" background="transparent" speed="1"
                style="width: 700px; height: 200px;"></iframe> --}}

                    </div>
                </div>
            </div>
        </div>

        <!-- About Start -->
        <div class="container-xxl py-5 mt-0" id="about">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">

                        <lottie-player src="https://lottie.host/a4ef3056-4594-4238-8471-d8f23af394d3/mR9lZuDMPy.json"
                            background="transparent" speed="1" style="width: 100%; max-width: 400px; height: auto;"
                            loop autoplay>
                        </lottie-player>

                        {{-- <img class="img-fluid" src="{{ asset('/landing/img/img-1.png') }}" alt=""
                            style="width: 200px; height:200px"> --}}
                    </div>
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <h1 class="display-6">Tentang</h1>
                            {{-- <p class="text-primary fs-5 mb-4">Sistem Informasi Repository Kerja Praktek dan Tugas akhir </p> --}}
                            <p>Selamat datang di platform Manajemen Repository Mahasiswa, tempat di mana pengetahuan
                                dan
                                pengaturan bertemu.</p>

                            <h5 class="display-12">Mengapa Manajemen Repository Mahasiswa Penting?</h5>
                            <p>Ketika tugas akhir dan kerja praktek menjadi bagian integral dari perjalanan
                                pendidikan Anda,
                                menyimpan, mengelola, dan merujuk kembali laporan-laporan ini dapat menjadi tugas
                                yang
                                menantang. Manajemen Repository Mahasiswa hadir sebagai solusi untuk menjadikan
                                proses ini
                                lebih
                                terstruktur dan produktif. Dengan platform kami, Anda dapat dengan mudah mengunggah,
                                mencari,
                                dan berbagi laporan-laporan ini dengan sesama mahasiswa.</p>
                            <h5 class="mb-4 display-12">Berikut beberapa fitur pada Sistem Informasi in :</h5>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                                <span>Fitur Upload laporan Kerja Praktek</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                                <span>Upload program Proyek Kerja Praktek </span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                                <span>Fitur Upload Skripsi/Laporan Tugas Akhir</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                                <span>Upload program Proyek Tugas Akhir</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- FAQs Start -->
        <div class="container-fluid hero-header bg-light py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6">FAQs</h1>
                    <p class="text-primary fs-5 mb-5">Frequently Asked Questions</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Bagaimana saya mendapatkan akun?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body ms-4">
                                        Untuk mendapatkan akun, mahasiswa yang telah melakukan pendaftaran Kerja
                                        Praktek
                                        atau Tugas Akhir dapat melakukan permohonan untuk dibuatkan akun melalui
                                        pihak
                                        administrasi prodi atau melalui Ketua Prodi Sistem Informasi.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Bagaimana saya melihat repository yang ada sebagai bahan referensi?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body ms-4">
                                        Anda dapat memilih menu pada DropDown menu Kategori dan dapat memilih
                                        kategori yang
                                        anda inginkan, kemudian anda akan diarahkan pada halaman berdasarkan
                                        kategori.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs Start -->
    @endsection
