<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="row justify-content-center">

        @include('admin.parametros.'.$view)

        <div class="col-md-9">
            <div class="card card-outline card-primary" style="height: inherit; width: inherit; transition: all 0.15s ease 0s;">
                <div class="card-header">
                    <h3 class="card-title">Parametros Registrados</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">


                    @include('admin.parametros.table')


                </div>
                <!-- /.card-body -->
            </div>

        </div>
    </div>
</div>
