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
                <form action="{{ route('inbox.store') }}" method="post" id="progressive-inbox-form" enctype="multipart/form-data">
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
                            <input type="number" name="phone_number" id="phone_number" class="form-control" placeholder="Nomor Telepon Pengirim" required>
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
                            <label for="prodi_id">Prodi<span class="text-danger">*</span></label>
                            <select name="prodi_id" id="prodi_id" class="">
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
                            <select name="letter_type_id" id="letter_type_id" class="" required>
                                <option value="">Pilih Sifat Surat</option>
                                @foreach (DB::table('letter_types')->get() as $item)
                                    <option value="{{$item->id}}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="letter_classification_id">Klasifikasi Surat<span class="text-danger">*</span></label>
                            <select name="letter_classification_id" id="letter_classification_id" class="" required>
                                <option value="">Pilih Klasifikasi Surat</option>
                                @foreach (DB::table('letter_classifications')->get() as $item)
                                    <option value="{{$item->id}}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="unit_id">Ditujukan Kepada<span class="text-danger">*</span></label>
                            <select name="unit_id" id="unit_id" class="" required>
                                <option value="">Pilih Unit</option>
                                @foreach (DB::table('units')->get() as $item)
                                    <option value="{{$item->id}}">{{ $item->name }} {{ $item->description }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="date">Tanggal Surat<span class="text-danger">*</span></label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="number">Nomor Surat<span class="text-danger">*</span></label>
                            <input type="text" name="number" id="number" class="form-control" placeholder="Nomor Surat" required>
                        </div>

                        <div class="form-group">
                            <label for="attachment">Lampiran Surat<span class="text-danger">*</span></label>
                            <input type="text" name="attachment" id="attachment" class="form-control" placeholder="Lampiran Surat" required>
                        </div>

                        <div class="form-group">
                            <label for="subject">Perihal Surat<span class="text-danger">*</span></label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Perihal Surat" required>
                        </div>

                        <div class="form-group">
                            <label for="file">Surat<span class="text-danger">*</span></label>
                            <input type="file" name="file" id="file" class="dropify" accept="application/pdf" required>
                        </div>
                    </div>

                    <div class="form-step">
                        <h5 class="mb-3">3 - Ringkasan</h5>
                        <div class="form-group">
                            <label for="summary-type"><strong>Jenis Surat:</strong></label>
                            <input type="text" id="summary-type" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="summary-name"><strong>Nama Pengirim:</strong></label>
                            <input type="text" id="summary-name" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="summary-email"><strong>Email Pengirim:</strong></label>
                            <input type="text" id="summary-email" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="summary-phone"><strong>Nomor Telepon:</strong></label>
                            <input type="text" id="summary-phone" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="summary-address"><strong>Alamat:</strong></label>
                            <input type="text" id="summary-address" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="summary-letter-type"><strong>Sifat Surat:</strong></label>
                            <input type="text" id="summary-letter-type" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="summary-classification"><strong>Klasifikasi Surat:</strong></label>
                            <input type="text" id="summary-classification" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="summary-unit"><strong>Ditujukan Kepada:</strong></label>
                            <input type="text" id="summary-unit" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="summary-number"><strong>Nomor Surat:</strong></label>
                            <input type="text" id="summary-number" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="summary-attachment"><strong>Lampiran Surat:</strong></label>
                            <input type="text" id="summary-attachment" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="summary-subject"><strong>Perihal Surat:</strong></label>
                            <input type="text" id="summary-subject" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="summary-file"><strong>Perihal Surat:</strong></label>
                            <input type="text" id="summary-file" class="form-control" readonly>
                        </div>
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
            // Selectize initialization
            $('#type, #faculty_id, #prodi_id, #letter_type_id, #letter_classification_id, #unit_id').selectize();

            // Dropify initialization for file uploads
            $('.dropify').dropify();

            // SweetAlert for session messages
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

            // Form Step Logic using jQuery
            var currentStep = 0;
            var formSteps = $('.form-step');
            var nextBtn = $('#nextBtn');
            var prevBtn = $('#prevBtn');

            // Function to update the steps
            function updateFormSteps() {
                formSteps.each(function(index) {
                    $(this).toggle(index === currentStep); // Show the current step, hide others
                });

                // Update step indicator and divider
                for (let i = 1; i <= formSteps.length; i++) {
                    const stepIndicator = $(`#step-indicator-${i}`);
                    const divider = $(`#divider${i - 1}`);

                    if (i - 1 <= currentStep) {
                        stepIndicator.addClass('active-step');
                        divider.addClass('active-divider');
                    } else {
                        stepIndicator.removeClass('active-step');
                        divider.removeClass('active-divider');
                    }
                }

                // Update the text and type of the next button at the last step
                if (currentStep === formSteps.length - 1) {
                    nextBtn.text("Kirim");
                    nextBtn.removeClass("btn-secondary").addClass("btn-info").attr("type", "button");
                } else {
                    nextBtn.text("Lanjut");
                    nextBtn.removeClass("btn-info").addClass("btn-secondary").attr("type", "button");
                }
            }

            // Function to fill the summary at the last step
            function updateSummary() {
                // Ambil teks dari option yang dipilih, bukan ID-nya
                $('#summary-type').val($('#type option:selected').text());
                $('#summary-name').val($('#name').val());
                $('#summary-email').val($('#email').val());
                $('#summary-phone').val($('#phone_number').val());
                $('#summary-address').val($('#address').val());
                $('#summary-letter-type').val($('#letter_type_id option:selected').text());
                $('#summary-classification').val($('#letter_classification_id option:selected').text());
                $('#summary-unit').val($('#unit_id option:selected').text());
                $('#summary-number').val($('#number').val());
                $('#summary-attachment').val($('#attachment').val());
                $('#summary-subject').val($('#subject').val());

                // Untuk file, tampilkan nama file yang dipilih
                var fileInput = $('#file')[0].files[0];
                if (fileInput) {
                    $('#summary-file').val(fileInput.name); // Display the file name in summary
                }
            }

            // Function to validate each step's required fields
            function validateFormStep(stepIndex) {
                var isValid = true;
                formSteps.eq(stepIndex).find("input[required], select[required]").each(function() {
                    if (!$(this).val()) {
                        $(this).addClass("is-invalid");
                        isValid = false;
                    } else {
                        $(this).removeClass("is-invalid");
                    }
                });
                return isValid;
            }

            // Handle "Next" button click
            nextBtn.on("click", function() {
                if (currentStep < formSteps.length - 1) {
                    if (validateFormStep(currentStep)) {
                        currentStep++;
                        updateFormSteps();

                        // If at the last step, fill the summary
                        if (currentStep === formSteps.length - 1) {
                            updateSummary();
                        }
                    } else {
                        Swal.fire({
                            title: 'Pemberitahuan!',
                            text: 'Harap isi semua kolom yang wajib diisi sebelum melanjutkan.',
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        });
                    }
                } else if (currentStep === formSteps.length - 1) {
                    // Only submit when "Kirim" button is clicked
                    $('#progressive-inbox-form').submit();
                }
            });

            // Handle "Previous" button click
            prevBtn.on("click", function() {
                if (currentStep > 0) {
                    currentStep--;
                    updateFormSteps();
                }
            });

            // Initialize the form display
            updateFormSteps();

            // Faculty change event handler (dynamic Prodi load)
            $('#faculty_id').on('change', function() {
                var facultyId = $(this).val();
                var prodiSelect = $('#prodi_id')[0].selectize;

                if (facultyId) {
                    $.ajax({
                        url: `{{ route("inbox.get-prodi-based-faculty") }}`,
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: JSON.stringify({ faculty_id: facultyId }),
                        success: function(data) {
                            prodiSelect.clear(true);
                            prodiSelect.clearOptions();
                            prodiSelect.addOption(data.data.map(function(item) {
                                return { value: item.id, text: item.name };
                            }));
                            prodiSelect.refreshOptions();
                        },
                        error: function(error) {
                            console.error('Error fetching Prodi:', error);
                        }
                    });
                } else {
                    prodiSelect.clear(true);
                    prodiSelect.clearOptions();
                }
            });

            // Handle type change (toggle faculty/prodi fields)
            $('#type').change(function() {
                let typeValue = $(this).val();

                if (typeValue === 'External' || typeValue === '') {
                    $('#faculty_id').closest('.form-group').hide();
                    $('#prodi_id').closest('.form-group').hide();
                    $('#faculty_id').removeAttr('required');
                    $('#prodi_id').removeAttr('required');
                } else if (typeValue === 'Internal') {
                    $('#faculty_id').closest('.form-group').show();
                    $('#prodi_id').closest('.form-group').show();
                    $('#faculty_id').attr('required', 'required');
                    $('#prodi_id').attr('required', 'required');
                }
            }).trigger('change');

        });
    </script>

</body>
</html>