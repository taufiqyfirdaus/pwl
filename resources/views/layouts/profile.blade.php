@extends('layouts.template')
@section('content')
<div style="margin-left: 290px;">
    <h1>Profile</h1>

    <h6>Nama  : {{$nama}}</h6>
    <h6>NIM   : {{$nim}}</h6>
    <h6>Kelas : {{$kelas}}</h6>
    <h6>Absen : {{$absen}}</h6>
</div>
@endsection
