@extends('layouts.base')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
           <h2 class="text-center mb-3"> Usuarios Guardados </h2>
            <a class="btn btn-success mb-5" href="{{url('/form') }}"> Agregar usuario </a>
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr class="table-secondary font-weight-bold">
                        <td>Nombre</td>
                        <td>Email</td>
                        <td>Rol</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->nombre}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->descripcion}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$users->links()}}
        </div>

    </div>

</div>





