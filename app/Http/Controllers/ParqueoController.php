<?php

namespace App\Http\Controllers;

use App\Models\Parqueo;
use App\Models\User;
use Illuminate\Http\Request;

class ParqueoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function registration()
    {
        return view('parking.registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = User::findOrFail($id);
        return view('parqueo.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials =   Request()->validate([ //validar los datos
            'nombre' => ['required'],
            'ubicacion' => ['required'],
            'id_user' => ['required'],


        ]);
       $parqueo= Parqueo::create([
            'nombre'=>request('nombre'),
            'ubicacion'=>request('ubicacion'),
            'id_user'=>request('id_user'),
        ]);
        /* Alert::success('Parqueo creado correctamente'); */
        return redirect()->route('planta.create', $parqueo->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function indexparqueouser($id){
        $parqueo=Parqueo::where('id_user',$id)->get();
        return view('parqueo.userindex', compact('parqueo'));
    }


}
