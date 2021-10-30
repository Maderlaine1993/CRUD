@extends('layouts.base')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">

            <!--Mensaje flash-->
            @if(session('usuarioModificado'))
                <div class="alert alert-success">
                    {{ session('usuarioModificado') }}
                </div>
            @endif

        <!--Validación de errores-->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="card">
                <form action="{{ route('edit', $usuario->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PATCH')
                    <div class="card-header text-center font-weight-bold"> Modificar Usuario</div>

                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-2 font-weight-bold">Nombre</label>
                            <input type="text" name="nombre" class="form-control col-md-9" value="{{$usuario->nombre}}">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2 font-weight-bold">Email</label>
                            <input type="text" name="email" class="form-control col-md-9" value="{{$usuario->email}}">
                        </div>

                        <div class="row form-group" >
                            <label for="" class="col-2 font-weight-bold">Imagen</label>
                            <div class="col-md-2 ">
                                <img src="{{asset('storage').'/'.$usuario->imagen}}" width="80">
                            </div>
                            <div class="custom-file col-md-7">
                                <input type="file" name="imagen" class="custom-file-input">
                                <label class="custom-file-label text-center" for="inputGroupFile04"> Subir imagen </label>
                            </div>
                        </div>

                        <div class=" row form-group">
                            <label for="" class="col-2 font-weight-bold">Rol</label>
                            <select name="rol_id" class="form-control col-md-9">
                                <option value="{{$usuario->rol_id}}">--Seleccionar--</option>

                                @foreach( $rol as $roles)
                                    <option value="{{$roles->id_rol}}"> {{$roles->descripcion}}  </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row form-group">
                            <button type="submit" class="btn btn-success col-md-9 offset-2">Modificar</button>
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>
@endsection

