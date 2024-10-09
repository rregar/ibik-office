<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>IBIK OFFICE - Kirim Surat</title>
    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/sbadmin-2/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/ibik_office_1.PNG') }}">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('assets/sbadmin-2/css/sb-admin-2.min.css')}}">
    <style>
        .horizontal-divider {
            flex-grow: 1;
            height: 1px;
            background-color: #858796;
            border: none;
            margin: 0 10px;
        }

        .active-divider {
            background-color: #4e73df!important;
        }

        .step-indicator {
            color: #858796;
        }

        .active-step {
            color: #4e73df;
            font-size: 1.2rem;
            font-weight: bolder;
        }
    </style>

</head>
<body>

    <div class="container mt-5">
        <div class="alert alert-primary" role="alert">
            <div class="font-weight-bolder">
                <h6 class="font-weight-bolder">PERHATIAN!</h6>
                <ol type="1">
                    <li> Pastikan surat yang akan dikirimkan sesuai dengan Tata Naskah Institusi dan mengisi semua kolom dengan BENAR.
                        Jika tidak sesuai dan tidak diisi dengan benar, surat akan dikembalikan ke pengirim. </li>
                    <li> Tanda terima surat akan dikirimkan melalui Whatsapp setelah mengisi formulir dibawah ini. Jika tidak diisi, maka tanda terima tidak akan dikirimkan. </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="step-indicator active-step" id="step-indicator-1">1</span>
                <hr class="horizontal-divider" id="divider1">
                <span id="step-indicator-2">2</span>
                <hr class="horizontal-divider" id="divider2">
                <span id="step-indicator-3">3</span>
            </div>
            <div class="card-body">
                <form action="" method="post" id="progressive-inbox-form">
                    @csrf
                    <div class="form-step active">
                        <h6 class="mb-3 font-weight-bolder">1 - KELENGKAPAN DATA DIRI</h6>
                        
                        <div class="form-group">
                            <label for="">Jenis<span class="text-danger">*</span></label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Jenis Surat</option>
                                <option value="">Internal</option>
                                <option value="">External</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Nama<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Nama lengkap Pengirim">
                        </div>

                        <div class="form-group">
                            <label for="">Nomor Telepon<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Nomor Telepon Pengirim">
                        </div>

                        <div class="form-group">
                            <label for="">Email<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Alamat Email Pengirim">
                        </div>

                        <div class="form-group">
                            <label for="">Prodi<span class="text-danger">*</span></label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Asal Program Studi</option>
                                <option value="">Sistem Informasi</option>
                                <option value="">Teknologi Informasi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Alamat<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Alamat Rumah/Kantor/Instansi Pengirim">
                        </div>
                    </div>

                    <div class="form-step">
                        <h5 class="mb-3">2 - Pengajuan Surat</h5>
                        <div class="form-group">
                            <label for="">Sifat Surat<span class="text-danger">*</span></label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Sifat Surat</option>
                                <option value="">Sistem Informasi</option>
                                <option value="">Teknologi Informasi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Klasifikasi Surat<span class="text-danger">*</span></label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Klasifikasi Surat</option>
                                <option value="">Sistem Informasi</option>
                                <option value="">Teknologi Informasi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Ditujukan Kepada<span class="text-danger">*</span></label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Unit</option>
                                <option value="">Sistem Informasi</option>
                                <option value="">Teknologi Informasi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Surat<span class="text-danger">*</span></label>
                            <input type="date" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Nomor Surat<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Nomor Surat">
                        </div>

                        <div class="form-group">
                            <label for="">Lampiran Surat<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Lampiran Surat">
                        </div>

                        <div class="form-group">
                            <label for="">Perihal Surat<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Perihal Surat">
                        </div>

                        <div class="form-group">
                            <label for="">Surat<span class="text-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Upload File Surat</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-step">
                        <h5 class="mb-3">3 - Ringkasan</h5>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <button type="button" class="btn btn-sm btn-secondary w-100 mb-3" id="prevBtn">Kembali</button>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <button type="button" class="btn btn-sm btn-secondary w-100" id="nextBtn">Lanjut</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <a href="/" class="btn btn-sm btn-info w-100 mt-4">Beranda</a>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/sbadmin-2/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/sbadmin-2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/sbadmin-2/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('assets/sweetalert/sweetalert2.all.min.js') }}"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('status') == 'success')
                Swal.fire({
                    title: 'Sukses',
                    text: "{{ session('message') }}",
                    icon: 'success',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'btn-info'
                    }
                });
            @endif
    
            @if (session('status') == 'error')
                Swal.fire({
                    title: 'Gagal',
                    text: "{{ session('message') }}",
                    icon: 'error',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'btn-info'
                    }
                });
            @endif
    
            @if (session('status') == 'info')
                Swal.fire({
                    title: 'Informasi',
                    text: "{{ session('message') }}",
                    icon: 'info',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'btn-info'
                    }
                });
            @endif
    
            @if (session('status') == 'warning')
                Swal.fire({
                    title: 'Peringatan',
                    text: "{{ session('message') }}",
                    icon: 'warning',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'btn-info'
                    }
                });
            @endif
        });
    </script>
    <script>
        let currentStep = 0;
        const formSteps = document.querySelectorAll(".form-step");
        const nextBtn = document.getElementById("nextBtn");
        const prevBtn = document.getElementById("prevBtn");

        function updateFormSteps() {
            formSteps.forEach((step, index) => {
                step.style.display = index === currentStep ? "block" : "none";
            });

            for (let i = 1; i <= formSteps.length; i++) {
                const stepIndicator = document.getElementById(`step-indicator-${i}`);
                const divider = document.getElementById(`divider${i - 1}`);

                if (i - 1 <= currentStep) {
                    stepIndicator.classList.add('active-step');
                    if (divider) divider.classList.add('active-divider');
                } else {
                    stepIndicator.classList.remove('active-step');
                    if (divider) divider.classList.remove('active-divider');
                }
            }
        }

        nextBtn.addEventListener("click", () => {
            if (currentStep < formSteps.length - 1) {
                currentStep++;
                updateFormSteps();
            }
        });

        prevBtn.addEventListener("click", () => {
            if (currentStep > 0) {
                currentStep--;
                updateFormSteps();
            }
        });

        updateFormSteps();
    </script>

</body>
</html>