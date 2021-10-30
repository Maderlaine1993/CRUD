@extends('layouts.base')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center font-weight-bold mb-5"> Lista de Roles </h2>

                <!--Mensaje Flash-->
                @if(session('usuarioEliminado'))
                    <div class="alert alert-danger">
                        {{session('usuarioEliminado')}}
                    </div>
                @endif

                <table class="table table-bordered table-light table-hover table-striped text-center">
                    <thead>
                    <tr class="table-info font-weight-bold">
                        <td>Id</td>
                        <td>Descripcion</td>
                        <td>Acciones</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $rol)
                        <tr>
                            <td>{{$rol->id_rol}}</td>
                            <td>{{$rol->descripcion}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary mb-2 mr-3">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" onclick="return confirm('Desea eliminar el rol')" class="btn btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$roles->links()}}
            </div>

        </div>

    </div>
@endsection
