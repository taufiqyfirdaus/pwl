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
        <h3 class="card-title">Keluarga</h3>

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
          <th>Id Keluarga</th>
          <th>Nama</th>
          <th>Ayah</th>
          <th>No. Telepon Ayah</th>
          <th>Ibu</th>
          <th>No. Telepon Ibu</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($keluarga as $k)
          <tr>
            <td>{{ $k->id_keluarga }}</td>
            <td>{{ $k->nama }}</td>
            <td>{{ $k->nama_ayah }}</td>
            <td>{{ $k->telp_ayah }}</td>
            <td>{{ $k->nama_ibu }}</td>
            <td>{{ $k->telp_ibu }}</td>
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
