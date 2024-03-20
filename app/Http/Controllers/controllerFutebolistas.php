<?php

namespace App\Http\Controllers;

use App\Models\futebolista;
use Illuminate\Http\Request;

class controllerFutebolistas extends Controller
{
    public function index()
    {
        $futebolistas = futebolista::all();
        return view("futebolistas.index", ["futebolistas" => $futebolistas]);
    }
    public function create()
    {
        return view("futebolistas.create");
    }
    public function store(Request $request)
    {
        futebolista::create($request->all());
        return redirect()->route("futebolistas.index");
    }
    public function edit($id)
    {
        $futebolistas=futebolista::where('id',$id)->first();
        if(!empty($futebolistas))
        {
            return view("futebolistas.edit", ["futebolistas"=>$futebolistas]);
            
        }
        else
        {
            return redirect()->route("futebolistas.index");
        }
    }
    public function update(Request $request, $id)
    {
        $data=["nome" => $request->nome,
        "idade" => $request->idade,
        "clube" => $request->clube,
        "posicao" => $request->posicao,
        "pais" => $request->pais];
        futebolista::where('id', $id)->update($data);
        return redirect()->route("futebolistas.index");
    }
    public function destroy($id)
    {
        futebolista::where('id', $id)->delete();
        return redirect()->route("futebolistas.index");
    }
    public function consult($id)
    {
        $futebolistas=futebolista::where('id',$id)->first();
        if(!empty($futebolistas))
        {
            return view("futebolistas.consult", ["futebolistas"=>$futebolistas]);
        }
        else
        {
            return redirect()->route("futebolistas.index");
        }
    }
}
