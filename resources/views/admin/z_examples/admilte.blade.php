@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard v2</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v2</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>

@endsection

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <p>{{ hola() }}</p>
    <p>
        <button onclick="Swal.fire('Any fool can use a computer')">hola</button></p>
@endsection

@section('footer')
    @include('layouts.admin.footer')
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@section('js')
    <script> console.log('Hi!'); </script>
@endsection

@section('plugins.Sweetalert2', true)
@section('plugins.Pace', true)
