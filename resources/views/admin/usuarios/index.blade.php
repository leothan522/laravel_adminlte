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



    <div class="row justify-content-center">

        <div class="col-md-3">

            <div class="card card-outline card-primary" style="height: inherit; width: inherit; transition: all 0.15s ease 0s;">
                <div class="card-header">
                    <h3 class="card-title">Maximizable</h3>
                    <div class="card-tools">
                        {{--<button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                        </button>--}}
                        <span class="btn btn-tool"><i class="fas fa-user-plus"></i></span>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    The body of the card
                </div>
                <!-- /.card-body -->
            </div>

        </div>

        <div class="col-md-9">

            <div class="card card-outline card-primary" style="height: inherit; width: inherit; transition: all 0.15s ease 0s;">
                <div class="card-header">
                    <h3 class="card-title">Maximizable</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">


                    <table class="table table-hover bg-light">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        </tbody>
                    </table>


                </div>
                <!-- /.card-body -->
            </div>

        </div>
    </div>



@endsection

@section('footer')
    @include('layouts.admin.footer')
@endsection

@section('css')
    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}
@endsection

@section('js')
    <script> console.log('Hi!'); </script>
@endsection

@section('plugins.Sweetalert2', true)
@section('plugins.Pace', true)
