<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function index(){
        return view("songs.perfil");
    }


    public function update(Request $request, string $id){
        $file = $request->file('img');
        $request->file('img')->store('public');
        $obj = User::find($id);
        $obj ->name = $request->name;
        $obj ->l_name = $request->l_name;
        $obj->img = $file->hashname();
        if($request->password!=null){
            $obj->password= Hash::make($request->password);
        }
        $obj->email = $request->mail;
        $obj->save();
        return redirect(route("perfil.index"));
        }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    /*public function actualizarU(Request $request, string $id){
        $obj = User::find($id);
        $obj->name = $request->name;
        $obj->l_name = $request->l_name;
        if($request->password->isNotEmpty()){
            $obj->password = $request->password;
        }
        $obj->img = $request->img;
        $obj->email = $request->email;
        $obj->save();
        return view("songs.perfil");
    }*/
}
