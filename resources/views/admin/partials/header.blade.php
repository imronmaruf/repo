<div class="nav-header">
    <div class="brand-logo">
        <a href="index.html">
            <b class="logo-abbr"><img src="{{ asset('admin/images/logo-min.png') }}" alt=""></b>
            <span class="logo-compact"><img src="{{ asset('admin/images/compact-logo2x.png') }}" alt=""></span>
            <span class="brand-title">
                <img src="{{ asset('admin/images/compact-logo2x.png') }}" alt="">
            </span>
        </a>
    </div>
</div>

<div class="header">
    <div class="header-content clearfix">
        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-left">
            <div class="input-group icons">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i
                            class="mdi mdi-magnify"></i></span>
                </div>
                <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                <div class="drop-down animated flipInX d-md-none">
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
        <div class="header-right">
            <ul class="clearfix">
                <li class="icons dropdown d-none d-md-flex">
                    <a href="#" class="log-user">
                        <span>{{ Auth::user()->fullname }}</span>
                    </a>
                </li>
                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                        <span class="activity active"></span>
                        <img src="{{ asset('picture/accounts/' . Auth::user()->gambar) }}" height="100" width="100"
                            alt="">
                    </div>
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            <div class="card-body">
                                <div class="text-center">
                                    <img alt="" class="rounded-circle"
                                        src="{{ asset('picture/accounts/' . Auth::user()->gambar) }}" height="50"
                                        width="50">
                                    <h5 class="card-widget__title text-dark mt-1">{{ Auth::user()->fullname }}</h5>
                                    @if (Auth::user()->role === 'user')
                                        <span class="text-muted">{{ Auth::user()->nim }}</span>
                                    @elseif(Auth::user()->role === 'admin')
                                        <span class="text-muted">{{ Auth::user()->email }}</span>
                                    @endif
                                </div>
                                <ul>
                                    <li>
                                        <a href="/profile"><i class="icon-user"></i>
                                            <span>Profile</span></a>
                                    </li>
                                    <hr class="my-2">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#modalLogout"><i
                                                class="fa fa-sign-out"></i>
                                            <i class=""></i>
                                            <span>Logout</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin untuk keluar?
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                <a href="{{ route('logout') }}" class="btn btn-danger"> <span>Keluar</span></a>

            </div>
        </div>
    </div>
</div>
