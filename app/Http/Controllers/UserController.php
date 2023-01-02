<?php

namespace App\Http\Controllers;

use App\Models\Parqueo;
use App\Models\User;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/* use RealRashid\SweetAlert\Facades\Alert;
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            'name' => ['required'],
            'telefono' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'admin' => ['required'],
            'cliente' => ['required'],

        ]);
       $user= User::create([
            'name'=>request('name'),
            'telefono'=>request('telefono'),
            'email'=>request('email'),
            'password'=> bcrypt(request('password')),
            'admin'=>request('admin'),
            'cliente'=>request('cliente'),

        ]);
        /* Alert::success('Usuario creado correctamente'); */
        return redirect()->route('parqueo.create', $user->id);
    }

    public function informacion($id){
        $users = User::where('id',$id)->get();
        $parqueo = Parqueo::all();

        return view('user.informacion',compact('users','parqueo'));
    }


    public function administrar($id){
        $users = User::where('id',$id)->get();
        $parqueo = Parqueo::all();

        return view('user.administrar',compact('users','parqueo'));
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
