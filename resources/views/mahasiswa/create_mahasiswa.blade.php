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
        <h3 class="card-title">Mahasiswa</h3>

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
            {!! (isset($mhs))? method_field('PUT') : '' !!}

            <div class="form-group">
                <label>Nim</label>
                <input class="form-control @error('nim') is-invalid @enderror" value="{{ isset($mhs)? $mhs->nim : old('nim') }}" name="nim" 
                type="text">
                @error('nim')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input class="form-control @error('nama') is-invalid @enderror" value="{{ isset($mhs)? $mhs->nama : old('nama') }}" name="nama" 
                type="text">
                @error('nama')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <div class="form-group">
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" @error('nama') is-invalid @enderror value="{{ isset($mhs)? $mhs->jk : old('jk') }}" name="jk">
                          <option value="">--Pilih Jenis Kelamin--</option>
                          <option value="l">Laki-laki</option>
                          <option value="p">Perempuan</option>
                        </select>
                        @error('jk')
                          <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                      </div>
                </div>
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ isset($mhs)? $mhs->tempat_lahir : 
                old('tempat_lahir') }}" name="tempat_lahir" type="text">
                @error('tempat_lahir')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ isset($mhs)? $mhs->tanggal_lahir : 
                old('tanggal_lahir') }}" name="tanggal_lahir" type="date">
                @error('tanggal_lahir')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control @error('alamat') is-invalid @enderror" value="{{ isset($mhs)? $mhs->alamat : old('alamat') }}" 
                name="alamat" type="text">
                @error('alamat')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>No. HP</label>
                <input class="form-control @error('hp') is-invalid @enderror" value="{{ isset($mhs)? $mhs->hp : old('hp') }}" name="hp" 
                type="text">
                @error('hp')
                <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <select class="form-control @error('kelas') is-invalid @enderror" value="{{ isset($mhs)? $mhs->kelas : old('kelas') }}" name="kelas" >
                  @foreach ($kelas as $kls)
                    <option value="{{$kls->id}}">{{$kls->nama_kelas}}</option>
                  @endforeach
                </select>
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
