<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>IBIK OFFICE - Sign In</title>
    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/sbadmin-2/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/ibik_office_1.PNG') }}">
    <!-- Custom styles for this template-->
    <link href="{{asset('assets/sbadmin-2/css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center align-items-center min-vh-100 d-flex">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center mb-3">
                                        <img src="{{asset('assets/img/ibik_office_1.PNG')}}" alt="" width="100" height="100">
                                    </div>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">IBIK OFFICE</h1>
                                    </div>
                                    <form action="{{ route('authenticate') }}" method="POST" class="user">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="Masukan alamat email..." value="{{old('email')}}" name="email">
                                            @error('email')
                                                <small class="text-danger mx-3">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="Password" name="password">
                                            @error('password')
                                                <small class="text-danger mx-3">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
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
    <script src="{{asset('assets/sbadmin-2/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/sbadmin-2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/sbadmin-2/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/sbadmin-2/js/sb-admin-2.min.js')}}"></script>

</body>

</html>