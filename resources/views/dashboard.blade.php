@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<h1>Selamat Datang, {{ Auth::user()->name }}!</h1>
<p>Sistem Pendaftaran dan Monitoring UKM Kampus.</p>
@endsection