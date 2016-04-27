<?php

namespace App\Http\Controllers;

use App\User;
use App\SubirWod;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\WodFijo;
use Illuminate\Support\Facades\Session;

class WodFijoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $user = $request->user();                        // retorna el usuario logeado

        $wod = WodFijo::where('user_id_fk', $user->id)->paginate(); // retorna los wods realizados por el usuario logeado y los ordena

        $wod->setPath('wod') ;

        return view('admin.wodfijo.index', compact('wod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data = SubirWod::all()
           ->lists('nombre','nombre');

        $selected = array();

       return view('admin.wodfijo.create',compact('data', 'selected'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user = $request->user(); // Retorna al usuario logueado
        $this->wodfijo= new WodFijo($request->all());
        $this->wodfijo->user_id_fk= $user->id;
        $this->wodfijo->save();

        return redirect()->route('wodfijo.index', compact('wodfijo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id, Request $request)
    {
        $wod= WodFijo::paginate();
        $wod->setPath('wod') ;

        return view('admin.wodfijo.index', compact('wod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $wodfijo= wodfijo::findOrfail($id);
        $data = SubirWod::all()
            ->lists('nombre','nombre');

        $selected = array();

        return view('admin.wodfijo.edit',compact('wodfijo','data', 'selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $wodfijo= WodFijo::findOrfail($id);

        $data=$request->all();
        $wodfijo->fill($data);


        $wodfijo->save();
        session::flash('message','WOD editado');
        return redirect()->route('wodfijo.index',array($wodfijo->id));
    }


    public function destroy($id)
    {
        $wodfijo= WodFijo::findOrfail($id);
        $wodfijo->delete();

        session::flash('message','WOD eliminado');
        return redirect()->route('wodfijo.index');
    }


    public function select()

    {
        $wodfijo = WodFijo::all()->lists('id','nombre');
        $selected = array();
        View::make("registro", compact('wodfijo', 'selected'));
    }
}

// sELECIONNAR DINAMICAMENTE
// controller.php
//$users = User::all()->lists('id', 'username');
//$selected = array();
//View::make("registro", compact('users', 'selected'));

// registro.blade.php

  //  {{ Form::select('nombres', $users, $selected) }}