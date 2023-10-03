@extends('auth.main')
@section('form')
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-4">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html">
                                    <h4>SI-REPO</h4>
                                </a>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $item)
                                                <li>{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (Session::get('success'))
                                    <div class="alert alert-success alert-dismissible fade show">
                                        <ul>
                                            <li>{{ Session::get('success') }}</li>
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('auth') }}" class="mt-5 mb-5 login-input" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email"
                                            value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                    </div>
                                    <button class="btn login-form__btn submit w-100" type="submit">Login</button>
                                </form>
                                <p class="mt-5 login-form__footer">Silahkan <a href="{{ route('registrasi') }}"
                                        class="text-primary">Registrasi</a> dahulu jika belum memiliki akun</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
