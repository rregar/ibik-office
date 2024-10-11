<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>IBIK OFFICE - Kirim Surat</title>
    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/sbadmin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/ibik_office_1.PNG') }}">
    <link rel="stylesheet" href="{{ asset('assets/selectize/selectize.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dropify/dropify.min.css') }}">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('assets/sbadmin-2/css/sb-admin-2.min.css') }}">
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
                            <label for="type">Jenis<span class="text-danger">*</span></label>
                            <select name="type" id="type" class="" required>
                                <option value="">Pilih Jenis Surat</option>
                                <option value="Internal">Internal</option>
                                <option value="External">External</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Nama<span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nama lengkap Pengirim" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email<span class="text-danger">*</span></label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Alamat Email Pengirim" required>
                        </div>

                        <div class="form-group">
                            <label for="phone_number">Nomor Telepon<span class="text-danger">*</span></label>
                            <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Nomor Telepon Pengirim" required>
                        </div>

                        <div class="form-group">
                            <label for="faculty_id">Fakultas<span class="text-danger">*</span></label>
                            <select name="faculty_id" id="faculty_id" class="">
                                <option value="">Pilih Fakultas</option>
                                @foreach (DB::table('faculties')->get() as $item)
                                    <option value="{{$item->id}}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="prodi">Prodi<span class="text-danger">*</span></label>
                            <select name="prodi" id="prodi" class="">
                                <option value="">Pilih Fakultas Terlebih Dahulu</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="address">Alamat<span class="text-danger">*</span></label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Alamat Rumah/Kantor/Instansi Pengirim" required>
                        </div>
                    </div>

                    <div class="form-step">
                        <h5 class="mb-3">2 - Pengajuan Surat</h5>
                        <div class="form-group">
                            <label for="letter_type_id">Sifat Surat<span class="text-danger">*</span></label>
                            <select name="letter_type_id" id="letter_type_id" class="">
                                <option value="">Pilih Sifat Surat</option>
                                @foreach (DB::table('letter_types')->get() as $item)
                                    <option value="{{$item->id}}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="letter_classification_id">Klasifikasi Surat<span class="text-danger">*</span></label>
                            <select name="letter_classification_id" id="letter_classification_id" class="">
                                <option value="">Pilih Klasifikasi Surat</option>
                                @foreach (DB::table('letter_classifications')->get() as $item)
                                    <option value="{{$item->id}}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="unit_id">Ditujukan Kepada<span class="text-danger">*</span></label>
                            <select name="unit_id" id="unit_id" class="">
                                <option value="">Pilih Unit</option>
                                @foreach (DB::table('units')->get() as $item)
                                    <option value="{{$item->id}}">{{ $item->name }}</option>
                                @endforeach
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
                            <label for="file">Surat<span class="text-danger">*</span></label>
                            <input type="file" name="file" id="file" class="dropify">
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
    <!-- Packages-->
    <script src="{{ asset('assets/selectize/selectize.min.js') }}"></script>
    <script src="{{ asset('assets/dropify/dropify.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/sbadmin-2/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('assets/sweetalert/sweetalert2.all.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Selectize
            $('#type, #faculty_id, #prodi, #letter_type_id, #letter_classification_id, #unit_id').selectize();

            // Dropify
            $('.dropify').dropify();

            // Sweet Alert
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

            // Hide or Show Fakultas/Prodi Inputs Based on Type
            $('#type').change(function() {
                let typeValue = $(this).val();
                
                if (typeValue === 'External' || typeValue === '') {
                    $('#faculty_id').closest('.form-group').hide();
                    $('#prodi').closest('.form-group').hide();
                    $('#faculty_id').removeAttr('required');
                    $('#prodi').removeAttr('required');
                } else if (typeValue === 'Internal') {
                    $('#faculty_id').closest('.form-group').show();
                    $('#prodi').closest('.form-group').show();
                    $('#faculty_id').attr('required', 'required');
                    $('#prodi').attr('required', 'required');
                }
            });

            $('#type').trigger('change');

            $('#faculty_id').on('change', function() {
                var facultyId = $(this).val();
                var prodiSelect = $('#prodi');

                if (facultyId) {
                    fetch(`{{ route("inbox.get-prodi-based-faculty") }}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ faculty_id: facultyId })
                    })
                    .then(response => response.json())
                    .then(data => {
                        var selectizeProdi = prodiSelect[0].selectize;
                        selectizeProdi.clear(true);
                        selectizeProdi.clearOptions();
                        selectizeProdi.settings.placeholder = 'Pilih Program Studi';
                        selectizeProdi.updatePlaceholder();
                        data.data.forEach(function(item) {
                            selectizeProdi.addOption({
                                value: item.id,
                                text: item.name
                            });
                        });
                        selectizeProdi.refreshOptions();
                    })
                    .catch(error => console.error('Error fetching Prodi:', error));
                } else {
                    var selectizeProdi = prodiSelect[0].selectize;
                    selectizeProdi.clear(true);
                    selectizeProdi.clearOptions();
                }
            });
        });

        // Progressive Form
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