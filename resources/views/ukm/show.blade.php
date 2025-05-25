@extends('layouts.app')
@section('title', 'Detail UKM')
@section('content')
<h2>{{ $ukm->nama_ukm }}</h2>
<p>{{ $ukm->deskripsi }}</p>
<a href="{{ route('ukm.index') }}" class="btn btn-secondary">Kembali</a>
@endsection