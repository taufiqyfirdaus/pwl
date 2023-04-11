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
        <form method="POST" action="{{ $url_form }}">
            @csrf
            {!! (isset($mkl))? method_field('PUT') : '' !!}

            <div class="form-gorup">
                <label>Nama Mata Kuliah</label>
                <input class="form-control @error('nama_matkul') is-invalid @enderror" value="{{ isset($mkl)? $mkl->nama_matkul
                 : old('nama_matkul') }}" name="nama_matkul" type="text">
                @error('nama_matkul')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>Dosen</label>
                <input class="form-control @error('nama_dosen') is-invalid @enderror" value="{{ isset($mkl)? $mkl->nama_dosen
                 : old('nama_dosen') }}" name="nama_dosen" type="text">
                @error('nama_dosen')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>Prodi</label>
                <input class="form-control @error('prodi') is-invalid @enderror" value="{{ isset($mkl)? $mkl->prodi
                 : old('prodi') }}" name="prodi" type="text">
                @error('prodi')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-gorup">
                <label>Jurusan</label>
                <input class="form-control @error('jurusan') is-invalid @enderror" value="{{ isset($mkl)? $mkl->jurusan
                 : old('jurusan') }}" name="jurusan" type="text">
                @error('jurusan')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-sm btn-success my-2">Submit</button>
        </form>
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
