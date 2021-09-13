@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Usuarios</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                        <li class="breadcrumb-item active">Usuarios Registrados</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>

@endsection

@section('content')



   @livewire('usuarios-component')



@endsection

@section('footer')
    @include('layouts.admin.footer')
@endsection

@section('css')
    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}
@endsection

@section('js')
    <script>
        console.log('Hi!');
        $('.swalDefaultInfo').click(function() {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'info',
                title: 'Generando Excel...',
                didOpen: () => {
                    Swal.showLoading()
                },
                showConfirmButton: false,
                timer: 3000,
            });
        });
    </script>
@endsection

@section('plugins.Sweetalert2', true)
{{--@section('plugins.Pace', true)--}}
