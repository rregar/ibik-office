@extends('layouts.base')

@section('title')
    Master User
@endsection

@section('page-heading')
    Master User
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/datatables/css/datatables.min.css') }}">
@endpush

@section('content')
    <div>
        <div class="row mb-4">
            <div class="col-12 d-flex flex-column flex-sm-row justify-content-end">
                @can('manage_masters')
                    <a href="" class="btn btn-info mx-2 my-1 w-sm-auto">
                        Tambah
                        <i class="fas fa-plus-circle"></i>
                    </a>
                @endcan
                <a href="#" id="export-excel-btn" class="btn btn-success mx-2 my-1 w-sm-auto">
                    Excel
                    <i class="fas fa-file-excel"></i>
                </a>
                <a href="#" id="export-csv-btn" class="btn btn-info mx-2 my-1 w-sm-auto">
                    CSV
                    <i class="fas fa-file-csv"></i>
                </a>
                <a href="#" id="export-pdf-btn" class="btn btn-danger mx-2 my-1 w-sm-auto">
                    PDF
                    <i class="fas fa-file-pdf"></i>
                </a>
                <a href="#" id="print-btn" class="btn btn-warning mx-2 my-1 w-sm-auto">
                    Print
                    <i class="fas fa-file-pdf"></i>
                </a>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card p-3 m-0 shadow">
                    <table class="table table-hover table-bordered" id="table"></table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/datatables/js/datatables.min.js') }}"></script>
    <script type="text/javascript">
        var table = $('#table').DataTable({
            responsive: true,
            fixedHeader: true,
            pagingType: 'simple_numbers',
            ajax: {
                url: "/master/user/get-cms-table",
                type: "GET",
                data: function(request) {
                    request.year = $('#year').val();
                },
                dataSrc: 'data',
            },
            language: {
                url: "{{ asset('assets/datatables/lang/id.json') }}",
            },
            columns: [
                { data: 'DT_RowIndex', title: 'No', className: 'text-left' },
                { data: 'name', title: 'Nama', className: 'text-left' },
                { data: 'email', title: 'Email', className: 'text-left' },
                { data: 'action', title: 'Aksi', className: 'text-left' },
            ],
            // buttons: [
            //     {
            //         extend: 'excelHtml5',
            //         className: 'd-none',
            //         filename: 'EPBJ-Standing-Instruction-' + new Date().getTime(),
            //         title: null,
            //         exportOptions: {
            //             modifier: {
            //                 page: 'all',
            //             },
            //             columns: ':not(:last-child)',
            //             format: {
            //                 header: function (data, columnIdx) {
            //                     switch(columnIdx) {
            //                         case 0: return "No";
            //                         case 1: return "Provinsi - kota/kabupaten";
            //                         case 2: return "Kegiatan - sub kegiatan";
            //                         case 3: return "Acara - tempat tujuan";
            //                         case 4: return "Tanggal berangkat - pulang";
            //                         case 5: return "Status";
            //                         default: return data;
            //                     }
            //                 }
            //             }
            //         }
            //     },
            //     {
            //         extend: 'pdfHtml5',
            //         className: 'd-none',
            //         filename: 'EPBJ-Standing-Instruction-' + new Date().getTime(),
            //         title: null,
            //         exportOptions: {
            //             modifier: {
            //                 page: 'all',
            //             },
            //             columns: ':not(:last-child)',
            //             format: {
            //                 header: function (data, columnIdx) {
            //                     switch(columnIdx) {
            //                         case 0: return "No";
            //                         case 1: return "Provinsi - kota/kabupaten";
            //                         case 2: return "Kegiatan - sub kegiatan";
            //                         case 3: return "Acara - tempat tujuan";
            //                         case 4: return "Tanggal berangkat - pulang";
            //                         case 5: return "Status";
            //                         default: return data;
            //                     }
            //                 }
            //             }
            //         }
            //     },
            //     {
            //         extend: 'csvHtml5',
            //         className: 'd-none',
            //         filename: 'EPBJ-Standing-Instruction-' + new Date().getTime(),
            //         title: null,
            //         exportOptions: {
            //             modifier: {
            //                 page: 'all',
            //             },
            //             columns: ':not(:last-child)',
            //             format: {
            //                 header: function (data, columnIdx) {
            //                     switch(columnIdx) {
            //                         case 0: return "No";
            //                         case 1: return "Provinsi - kota/kabupaten";
            //                         case 2: return "Kegiatan - sub kegiatan";
            //                         case 3: return "Acara - tempat tujuan";
            //                         case 4: return "Tanggal berangkat - pulang";
            //                         case 5: return "Status";
            //                         default: return data;
            //                     }
            //                 }
            //             }
            //         }
            //     },
            //     {
            //         extend: 'print',
            //         className: 'd-none',
            //         title: '',
            //         exportOptions: {
            //             modifier: {
            //                 page: 'all',
            //             },
            //             columns: ':not(:last-child)',
            //             format: {
            //                 header: function (data, columnIdx) {
            //                     switch(columnIdx) {
            //                         case 0: return "No";
            //                         case 1: return "Provinsi - kota/kabupaten";
            //                         case 2: return "Kegiatan - sub kegiatan";
            //                         case 3: return "Acara - tempat tujuan";
            //                         case 4: return "Tanggal berangkat - pulang";
            //                         case 5: return "Status";
            //                         default: return data;
            //                     }
            //                 }
            //             }
            //         }
            //     }
            // ],
        });

        $('#export-excel-btn').on('click', function(e) {
            e.preventDefault();
            table.button('.buttons-excel').trigger();
        });

        $('#export-pdf-btn').on('click', function(e) {
            e.preventDefault();
            table.button('.buttons-pdf').trigger();
        });

        $('#export-csv-btn').on('click', function(e) {
            e.preventDefault();
            table.button('.buttons-csv').trigger();
        });

        $('#print-btn').on('click', function(e) {
            e.preventDefault();
            table.button('.buttons-print').trigger();
        });
    </script>
@endpush