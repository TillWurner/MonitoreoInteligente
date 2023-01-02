<?php

namespace App\Http\Controllers;

use App\Models\Parqueo;
use App\Models\Planta;
use Illuminate\Http\Request;

class PlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function indexplanta($id){
        $plantas=Planta::where('id_parqueo',$id)->get();
        return view('planta.index', compact('plantas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $parqueo = Parqueo::findOrFail($id);
        return view('planta.create', compact('parqueo'));
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
            'cantidad_espacios' => ['required'],
            'numero' => ['required'],
            'id_parqueo' => ['required'],


        ]);
        $input = $request->all();
        $contador = 1;
         for($i = 0; $i < count($input['cantidad_espacios']); $i++){

            $parqueo = Parqueo::where('id',$request->id_parqueo[$i])->first();
            /* $parqueo->cantidad_espacios = $parqueo->cantidad_planta + $request->cantidad[$i]; */

            $planta = new Planta;
            $planta->cantidad_espacios = $request->cantidad_espacios[$i];
            $planta->id_parqueo = $request->id_parqueo[$i];
            $planta->numero = $request->numero[$i];

            $planta->save();
            /* $parqueo->save(); */
        }

        return redirect()->route('user.index');
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
}
