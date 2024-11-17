@extends('layouts.base')

@section('title')
    Surat Masuk
@endsection

@section('page-heading')
    Surat Masuk
@endsection

@section('content')

<div class="card shadow mb-4">
    <div class="card-body">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Prodi ID</th>
                    <th>Unit ID</th>
                    <th>Letter Type ID</th>
                    <th>Letter Classification ID</th>
                    <th>Faculty ID</th>
                    <th>Type</th>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Tanggal</th>
                    <th>Nomor</th>
                    <th>Lampiran</th>
                    <th>Subjek</th>
                    <th>File</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/datatables/css/datatables.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/datatables/js/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            var table = $('#dataTable').DataTable({
                responsive: true,
                fixedHeader: true,
                pagingType: 'simple_numbers',
                ajax: {
                    url: "/inbox/get-cms-table",
                    type: "GET",
                    dataSrc: 'data',
                },
                language: {
                    url: "{{ asset('assets/datatables/lang/id.json') }}",
                },
                columns: [
                    { data: 'DT_RowIndex', title: 'No', className: 'text-center', orderable: false },
                    { data: 'id', title: 'ID', className: 'text-left' },
                    { data: 'prodi_id', title: 'Prodi ID', className: 'text-left' },
                    { data: 'unit_id', title: 'Unit ID', className: 'text-left' },
                    { data: 'letter_type_id', title: 'Letter Type ID', className: 'text-left' },
                    { data: 'letter_classification_id', title: 'Letter Classification ID', className: 'text-left' },
                    { data: 'faculty_id', title: 'Faculty ID', className: 'text-left' },
                    { data: 'type', title: 'Type', className: 'text-left' },
                    { data: 'name', title: 'Nama', className: 'text-left' },
                    { data: 'phone_number', title: 'Nomor Telepon', className: 'text-left' },
                    { data: 'email', title: 'Email', className: 'text-left' },
                    { data: 'address', title: 'Alamat', className: 'text-left' },
                    { data: 'date', title: 'Tanggal', className: 'text-left' },
                    { data: 'number', title: 'Nomor', className: 'text-left' },
                    { data: 'attachment', title: 'Lampiran', className: 'text-left' },
                    { data: 'subject', title: 'Subjek', className: 'text-left' },
                    { data: 'file', title: 'File', className: 'text-left' },
                    { data: 'action', title: 'Aksi', orderable: false, searchable: false, className: 'text-center' },
                ]
            });
        });
    </script>
@endpush