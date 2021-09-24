@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <p>{{ hola() }}</p>
    <p>
        <button onclick="Swal.fire('Any fool can use a computer')">hola</button></p>
    <p>{{  auth()->user()->role  }}</p>

@endsection

@section('footer')
    @include('layouts.admin.footer')
@endsection

@section('css')
   {{-- <link rel="stylesheet" href="/css/admin_custom.css">--}}
@endsection

@section('js')
    <script> console.log('Hi!'); </script>
@endsection

@section('plugins.Sweetalert2', true)
@section('plugins.Pace', true)
