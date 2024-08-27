<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ePBJ - Reset Password</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', Arial, sans-serif;
        }

        .gradient-text {
            background-color: transparent;
            background-image: linear-gradient(315deg, #36b9cc 0%, #36b9cc 74%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .gradient-button {
            background-color: #36b9cc;
            /* background-image: linear-gradient(315deg, #ff4e00 0%, #ec9f05 74%); */
            color: white !important;
            text-align: center;
            display: block;
            padding: 0.5rem 1.5rem;
            border-radius: 0.25rem;
            text-decoration: none;
        }

        .card {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 1rem;
            width: 100%;
            max-width: 30rem;
            margin: auto;
            padding: 1rem;
        }

        .card-body {
            padding: 1rem 1.5rem;
            color: black;
        }

        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #e0e0e0;
        }

        .card-header img {
            margin-right: 1rem;
        }

        .card-header span {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0;
        }

        .card-content h5 {
            margin-bottom: 0;
        }

        .card-content p {
            color: #6c757d;
            margin-top: 0.5rem;
        }

        .card-footer {
            padding-top: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .signin-link {
            font-size: 0.875rem;
            color: #6c757d !important;
            text-decoration: none;
            /* float: left; */
            text-align: center;
        }
    </style>
</head>
<body>
    <table role="presentation" style="width: 100%; height: 100%; background-color: #f8f9fa;">
        <tr>
            <td align="center" style="padding: 2rem 0;">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="">
                            <div class="card-header">
                                {{-- <img src="{{ URL::asset('assets/images/logo-dprd.jpg') }}" alt="aset-ePBJ.svg" width="100" height="100"> --}}
                                <span class="gradient-text">IBIK OFFICE</span>
                            </div>
                            <div class="card-content">
                                <h3>Instruksi Reset Password</h3>
                                <p>
                                    Kami tidak bisa begitu saja mengirimkan kata sandi lama Anda kepada Anda. Tautan unik untuk mengatur ulang kata sandi Anda telah dibuat untuk Anda. Untuk mengatur ulang kata sandi Anda, klik tautan berikut dan ikuti instruksinya.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('forgot-password.', $token)}}" class="gradient-button">RESET PASSWORD</a>
                            </div>
                            <a class="signin-link" href="{{ route('sign-in') }}">Sign in disini.</a>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>