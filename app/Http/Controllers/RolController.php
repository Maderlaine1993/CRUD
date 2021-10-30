<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function lista(){
        $data['roles'] = Rol::paginate(5);
        return view('roles.listadorol', $data);
    }
}
