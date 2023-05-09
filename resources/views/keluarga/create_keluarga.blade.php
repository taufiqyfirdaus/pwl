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
        <form method="POST" action="{{ $url_form }}">
            @csrf
            {!! (isset($klg))? method_field('PUT') : '' !!}

            <div class="form-group">
                <label>Nama</label>
                <input class="form-control @error('nama') is-invalid @enderror" value="{{ isset($klg)? $klg->nama
                 : old('nama') }}" name="nama" type="text">
                @error('nama')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Ayah</label>
                <input class="form-control @error('nama_ayah') is-invalid @enderror" value="{{ isset($klg)? $klg->nama_ayah
                 : old('nama_ayah') }}" name="nama_ayah" type="text">
                @error('nama_ayah')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>No. HP Ayah</label>
                <input class="form-control @error('telp_ayah') is-invalid @enderror" value="{{ isset($klg)? $klg->telp_ayah
                 : old('telp_ayah') }}" name="telp_ayah" type="text">
                @error('telp_ayah')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Ibu</label>
                <input class="form-control @error('nama_ibu') is-invalid @enderror" value="{{ isset($klg)? $klg->nama_ibu
                 : old('nama_ibu') }}" name="nama_ibu" type="text">
                @error('nama_ibu')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>No. HP Ibu</label>
                <input class="form-control @error('telp_ibu') is-invalid @enderror" value="{{ isset($klg)? $klg->telp_ibu
                : old('telp_ibu') }}" name="telp_ibu" type="text">
                @error('telp_ibu')
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
