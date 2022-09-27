@extends('layout.app')

@section('title')
Siswa
@endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Siswa</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Siswa</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Siswa</h3>
            <div class="card-tools">
                <button type="button" onclick="addForm('{{ route('siswa.store') }}')" class="btn btn-tool">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Siswa</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Mapel</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->jenis_kelamin}}</td>
                        <td>{{$item->mapel_id}}</td>
                        <td>
                            <button onclick="editData()" class="btn btn-flat btn-xs btn-warning ">
                            <i class="fas fa-edit"></i></button>
                            |
                            <button onclick="hapusData()" class="btn btn-flat btn-xs btn-danger"><i class="fas fa-trash"></i></i></button>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</section>
@include('siswa.form')
@endsection

@push('script')
<script>
    function addForm(url) {
        $('#modalForm').modal('show');
        $('#modalForm .modal-title').text('Tambah Data Siswa');
    }

    function editData() {
        $('#modalForm').modal('show');
        $('#modalForm .modal-title').text('Edit Data Siswa');
    }
    function hapusData() {
        $('#modalForm').modal('show');
        $('#modalForm .modal-title').text('Data Telah Dihapus');
    }

</script>
@endpush
