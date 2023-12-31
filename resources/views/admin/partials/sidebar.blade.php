<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            {{-- <li class="nav-label"></li> --}}
            <li>
                <a href="{{ url('/administrator') }}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>

            </li>

            <li class="nav-label">Master Data</li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="mdi mdi-database menu-icon"></i><span class="nav-text">Repository</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/repo-kp">Kerja Praktek</a></li>
                    <li><a href="/repo-tga">Tugas Akhir</a></li>
                </ul>
            </li>

            {{-- <li class="nav-label">Forms</li> --}}
            @if (auth()->user() && auth()->user()->role === 'admin')
                <li>
                    <a href="{{ route('kategori') }}" aria-expanded="false">
                        <i class="icon-list menu-icon"></i><span class="nav-text">Kategori</span>
                    </a>
                </li>
                </li>
                {{-- <li class="nav-label">Table</li> --}}

                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-note menu-icon"></i><span class="nav-text">Data</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('datamhs') }}">Data Mahasiswa</a></li>
                        <li><a href="{{ route('dosbing') }}">Data Dosbing</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('usercontrol') }}" aria-expanded="false">
                        <i class="icon-user menu-icon"></i><span class="nav-text">User Control</span>
                    </a>
                </li>
            @endif

            <li class="nav-label">Pengaturan</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-settings menu-icon"></i><span class="nav-text">Pengaturan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./page-login.html">Login</a></li>
                    <li><a href="./page-register.html">Register</a></li>
                    <li><a href="./page-lock.html">Lock Screen</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="./page-error-404.html">Error 404</a></li>
                            <li><a href="./page-error-403.html">Error 403</a></li>
                            <li><a href="./page-error-400.html">Error 400</a></li>
                            <li><a href="./page-error-500.html">Error 500</a></li>
                            <li><a href="./page-error-503.html">Error 503</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
