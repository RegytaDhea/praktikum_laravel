@extends('layouts.master') <!--menggunakan file master di folder layout, di contoh ini semua file di master disesuaikan antara master dg coba 1--->
@section('menu')
@section('content_header')
<h1>
	Coba 1
	<small>Control panel</small>
</h1>
<ol class="breadcrumb">
	<li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Coba 1</li>
</ol>
@endsection

@section('content')
Halo ini coba 1
@endsection