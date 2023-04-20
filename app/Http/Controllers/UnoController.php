<?php

namespace App\Http\Controllers;

use App\Models\Lists;

use App\Models\Songs;

use Illuminate\Http\Request;
use App\Models\uno;

class UnoController extends Controller
{
public function index()
{
    return view("songs.template", ['songs'=> uno::get()]);
}
public function subiruno(Request $request)
{
    $obj = new uno();
    $obj->nombre = $request->name;
    $obj->autor = $request->autor;
    $obj->archivo_au = $request->file;
    $obj->foto = $request->img;
    $obj->l_list ='uno';
    $obj->save();
    return redirect()->route('songs.index')->with('guardar', 'Canción agregada correcta');
}
public function deleteuno(string $id)
{
    $obj = uno::destroy($id);
    return redirect()->route('uno.index')->with('delete', 'Canción eliminada correctamente');
}
}