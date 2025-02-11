<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IBIK OFFICE - Forgot Password</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/sbadmin-2/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/sbadmin-2/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center align-items-center min-vh-100 d-flex">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 text-center my-auto d-none d-lg-block">
                                <img src="{{asset('assets/img/ibik_office_1.PNG')}}" alt="" width="300" height="300">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-left">
                                        <h1 class="h4 text-gray-900 mb-2">Instruksi Reset Password</h1>
                                        <p class="mb-4">Lupa kata sandi Anda? Tidak masalah. Beritahu kami alamat email Anda, dan kami akan mengirimkan tautan reset kata sandi melalui email yang akan memungkinkan Anda memilih kata sandi baru.</p>
                                    </div>
                                    <form method="POST" action="{{ route('forgot-password.send-link') }}" class="user">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="Masukkan alamat email...">
                                            @error('email')
                                                <small class="text-danger mx-3">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-info btn-user btn-block">
                                            Kirim Link
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small text-secondary" href="{{ route('sign-in') }}">Sign in disini.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/sbadmin-2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/sbadmin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/sbadmin-2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/sbadmin-2/js/sb-admin-2.min.js') }}"></script>

</body>

</html>