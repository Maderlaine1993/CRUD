<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //Lista
    public function list(){
        $users=DB::table('usuarios')
            ->join('rol', 'usuarios.rol_id', '=', 'rol.id_rol')
            ->select('usuarios.*', 'rol.descripcion')
            ->paginate(5);
        return view('usuarios.listar', compact('users'));
    }

    //Formulario de usuarios
   public function userform(){
       $rol=Rol::all();
       return view('usuarios.userform', compact('rol'));
   }

   //Guardar usuarios
    public function save(Request $request){

        //Validamos los campos ingresados por el usuario
       $validator = $this->validate($request,[
           'nombre'=> 'required|string|max:100',
           'email'=> 'required|string|max:50|email|unique:usuarios',
           'imagen'=> 'required',
           'id_rol'=> 'required'
       ]);

       //Subimos la imagen ingresada para el usuario
       if($request->hasFile('imagen')){
           $validator['imagen']= $request->file('imagen')->store('imagenes', 'public');
       }

       //Creamos los campos validados
       Usuario::create([
           'nombre'=> $validator ['nombre'],
           'email'=> $validator ['email'],
           'imagen'=> $validator['imagen'],
           'rol_id'=> $validator ['id_rol']
       ]);

       return back()->with('usuarioGuardado','Usuario guardado');
    }

    //Creamos funcion para eliminar usuarios
    public function delete($id){
        Usuario::destroy($id);
        return back()->with('usuarioEliminado','Usuario Eliminado');
    }

    //Creamos funcion para el formulario de modificar
    public function editform($id){
        $rol=Rol::all();
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.editform', compact('usuario', 'rol'));
    }

    //Creamos funcion para modificar el usuario
    public function edit(Request $request,$id){
        $dataUsuario=request()->except((['_token', '_method']));
        Usuario::where('id','=', $id)->update($dataUsuario);
        return back()->with('usuarioModificado', 'Usuario Modificado');
    }
}


