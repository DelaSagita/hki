<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LOGIN | SIHAKI POLITAP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/circular-std/style.css">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-image: url("gambar/login.jpg");
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="/"></a><span class="splash-description"><h2>LOGIN</h2></span></div>
            <div class="card-body">

            @foreach(['success', 'danger', 'warning',] as $status)
                @if(session($status))
                    <div class="alert alert-{{$status}} alert-dismissable custom-{{$status}}-box">
                        <strong class="text-white">{{session($status)}}</strong>
                        <a href="" class="close" data-dismiss="alert" aria-label="close" style="float: right;">&times;</a>
                    </div>
                @endif
            @endforeach
                <form method="POST" action="{{ route('postlogin') }}">
                    @csrf

                    <div class="form-group">
                        <input class="form-control @error('email') is-invalid @enderror form-control-lg" id="email" type="email" placeholder="Email" name="email" autocomplete="off" value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <input class="form-control @error('password') is-invalid @enderror form-control-lg" id="password" type="password" placeholder="Password" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                <div class="form-group my-3 d-block">
                    <a href="{{ url('forgot') }}" class="float-right">Lupa Kata Sandi ?</a>
                </div>


                    <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Login') }}</button>
                </form>
            </div>

            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                   <p> Belum Punya Akun? <a href="{{ route('register') }}"  class="text-secondary">Ayo Daftar</a></p>
                </div>

                {{-- <div class="card-footer-item card-footer-item-bordered">
                @if (Route::has('password.request'))
                    <a class="footer-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Password') }}
                    </a>
                @endif


                </div> --}}
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
