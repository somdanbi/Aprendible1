@extends('admin.backend')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">

            <!-- Title & Breadcrumbs-->
            <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                    <h4 class="theme-cl">Lista de Todos los Usuarios</h4>
                </div>
            </div>
            <!-- Title & Breadcrumbs-->


            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <a href="#" class="btn btn-success">
                                Crear Usuario
                            </a>
                        </div>


                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Foto</th>
                                <th>E-mail</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if(!$users)
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>
                                            <img src="{{asset('img/no-avatar.svg')}}" alt="" class="img-responsive" width="60" height="50">
                                        </td>
                                        <td>{{$user->email}}</td>


                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>-</td>
                                    <td>No hay usuarios para mostrar</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->



        </div>
        <!-- /.content-wrapper-->

        @include('admin.footer')

    </div>


@endsection