@extends('layouts.template')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Mata Kuliah</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
      <table class="table table-bordered tabel-hover">
      <thead>
        <tr>
          <th>Id Mata Kuliah</th>
          <th>Nama</th>
          <th>Dosen</th>
          <th>Prodi</th>
          <th>Jurusan</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($matkul as $m)
          <tr>
            <td>{{ $m->id_matkul }}</td>
            <td>{{ $m->nama_matkul }}</td>
            <td>{{ $m->nama_dosen }}</td>
            <td>{{ $m->prodi }}</td>
            <td>{{ $m->jurusan }}</td>
          </tr>
          @endforeach
          </tbody>
      </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
@endsection
@push('custom_js')
<script>
</script>
@endpush
