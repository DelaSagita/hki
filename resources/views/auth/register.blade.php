

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>REGISTER USER | SIHAKI POLITAP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
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
        background-image: url("gambar/gambar4.jpg");
    }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->


    <form method="POST" action="{{ route('postuser') }}" class="splash-container">
        @csrf
        <input type="hidden" name="role" value="user">
        <div class="card">
            <div class="card-header mb-0">
                <h3 class="text-center">REGISTRASI</h3>
            </div>
            <div class="card-body">

                <div class="form-group">
                    <input class="form-control @error('name') is-invalid @enderror form-control-lg" type="text" name="name" value="{{ old('name') }}" required="" placeholder="Nama Lengkap" autocomplete="off">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input class="form-control @error('email') is-invalid @enderror form-control-lg" type="email" name="email" required="" placeholder="E-mail" value="{{ old('email') }}" autocomplete="off">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input class="form-control @error('password') is-invalid @enderror form-control-lg" id="pass1" name="password" type="password" required autocomplete="new-password" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                {{-- <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm">
                </div> --}}


                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Register</button>
                </div>

            </div>
            <div class="card-footer bg-white">
                <p>Sudah Punya Akun? <a href="{{ route('login') }}" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>


</html>
