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
                <img src="{{ asset('assets/img/ibik_office_1.PNG') }}" width="90" height="80" class="d-inline-block align-top mr-3" alt="">
                <h4>IBIK OFFICE</h4>
            </a>
            <a href="/" class="btn btn-secondary text-white"><i class="fas fa-angle-left"></i> Kembali</a>
        </div>
    </nav>
</div>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="text-dark">Kirim Surat</h3>
            </div>
<div>
<div class="container mt-5">
        <div class="alert alert-primary" role="alert" style="height: 155px">
            <div>
                <h6>PERHATIAN!</h6>
                <ol type="1">
                    <li> Pastikan surat yang akan dikirimkan sesuai dengan Tata Naskah Institusi dan mengisi semua kolom dengan BENAR.
                        Jika tidak sesuai dan tidak diisi dengan benar, surat akan dikembalikan ke pengirim. </li>
                    <li> Tanda terima surat akan dikirimkan melalui Whatsapp setelah mengisi formulir dibawah ini. Jika tidak diisi, maka tanda terima tidak akan dikirimkan. </li>
                </ol>
            </div>
        </div>
    </div>
 
            <div class="card-body text-dark">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pengirim</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Nama Lengkap Pengirim Surat.</small>
                </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Prodi</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"> 
                        <small id="emailHelp" class="form-text text-muted">Asal Fakultas dan Jurusan.</small>
                </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">No Handphone</label>
                        <input type="email" class="form-control" id="exampleInputEmail1">
                        <small id="emailHelp" class="form-text text-muted">No Whatsapp dari Pengirim Surat.</small>
                </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ditujukan Kepada</label>
                        <input type="email" class="form-control" id="exampleInputEmail1">
                        <small id="emailHelp" class="form-text text-muted">Ex:BAAK, BAUM, Dll.</small>
                </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Surat</label>
                        <input type="email" class="form-control" id="exampleInputEmail1">
                        <small id="emailHelp" class="form-text text-muted">blablabla</small>    
                </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Lampiran</label>
                        <input type="email" class="form-control" id="exampleInputEmail1">
                        <small id="emailHelp" class="form-text text-muted">blablabla</small>    

                </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">File Surat</label>
                        <input type="email" class="form-control" id="exampleInputEmail1">   
                        <input type="file" name="file" id="file" class="form-control dropify" data-allowed-file-extensions="pdf">
                        <small id="emailHelp" class="form-text text-muted">File PDF</small> 

                

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