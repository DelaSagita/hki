
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LOGIN | SIHAKI POLITAP</title>
    <link rel="icon" href="../assets/images/logo.png" type="image/x-icon">
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
            background-image: url("gambar/gambar.jpg");
        }
    </style>

</head>

<body class="page-login">
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->


<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center"><span class="splash-description"><h5>ATUR ULANG PASSWORD</h5></div>
        <div class="card-body">
            @foreach(['success', 'danger', 'warning',] as $status)
                @if(session($status))
                    <div class="alert alert-{{$status}} alert-dismissable custom-{{$status}}-box">
                        <strong class="text-white">{{session($status)}}</strong>
                        <a href="" class="close" data-dismiss="alert" aria-label="close" style="float: right;">&times;</a>
                    </div>
                @endif
            @endforeach
            <form method="POST" action="{{ url('updatePassword', $list->id)}}">
               @csrf

                <div class="form-group">
                    <input class="form-control  form-control-lg @error('old') is-invalid @enderror" value="{{ old('old') }}"  type="password" placeholder="Password baru..." name="old">
                    @error('old')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control  form-control-lg @error('new') is-invalid @enderror" value="{{ old('new') }}"  type="password" placeholder="Konfirmasi Password baru..." name="new">
                    @error('new')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary btn-lg btn-block">KONFIRMASI</button>
            </form>
        </div>

        <div class="card-footer bg-white p-0  ">
            <div class="card-footer-item card-footer-item-bordered">
               <p> Sudah Punya Akun? <a href="{{ url('login') }}"  class="text-secondary">Kembali login</a></p>
            </div>


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
