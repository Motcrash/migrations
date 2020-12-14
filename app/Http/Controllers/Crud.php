<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Crud extends Controller
{

    public function index()
    {
        $user = DB::table('poetas')
            ->orderBy('poetCode')
            ->get();

        return view('Crud.showUsarios',[
            'poet' => $user
        ]);
    }

    public function create()
    {
        return view('crud.crearUsuario');
    }

    public function store(Request $request)
    {
        $User = DB::table('poetas')
        ->insert([
            'poetCode' =>$request->input('cCode'),
            'firstName' =>$request->input('fName'),
            'surName' =>$request->input('sName'),
            'address' =>$request->input('address'),
            'postCode' =>$request->input('pCode'),
            'telephoneNumber' =>$request->input('tNumber')
        ]);

        return redirect()->action('Crud@index')
            ->with('status', 'Poeta creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($poetCode)
    {
        $user = DB::table('poetas')
        ->where('poetCode','=', $poetCode)
        ->first();
        
        return view('Crud.crearUsuario', ['user'=>$user]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $user = DB::table('poetas')
        ->where('poetCode', '=',$request->input('poetCode'))
        ->update([
            'poetCode' =>$request->input('cCode'),
            'firstName' =>$request->input('fName'),
            'surName' =>$request->input('sName'),
            'address' =>$request->input('address'),
            'postCode' =>$request->input('pCode'),
            'telephoneNumber' =>$request->input('tNumber')
        ]);
        return redirect()->action('Crud@index')
            ->with('status', 'Cliente modificado exitosamente');
    }

    public function destroy($poetCode)
    {
        $user = DB::table('poetas')
        ->where('poetCode', '=', $poetCode)
        ->delete();

        return redirect()->action('Crud@index')
            ->with('status', 'Cliente eliminado exitosamente');
    }
}
