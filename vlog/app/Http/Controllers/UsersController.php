<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getUsers(){
        //**Select * from users */
        $data =User::all();

        //dd("$data");
        return view("Admin.users")
        ->with('usuarios',$data);
    }
}
