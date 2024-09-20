<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IBIK OFFICE - Kirim Surat</title>
    <link href="{{ asset('assets/sbadmin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/sbadmin-2/css/sb-admin-2.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-light bg-light shadow-lg">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('assets/img/ibik_office_1.PNG') }}" width="80" height="80" class="d-inline-block align-top mr-3" alt="">
                <h4>IBIK OFFICE</h4>
            </a>
            <a href="/" class="btn btn-secondary text-white"><i class="fas fa-angle-left"></i> Kembali</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="text-dark">Kirim Surat</h3>
            </div>
            <div class="card-body text-dark">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-info w-100 mt-3">Submit</button>
                    {{-- <h5 class="card-title">Special title treatment</h5> --}}
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </form>
            </div>
        </div>
    </div>
</body>
</html>