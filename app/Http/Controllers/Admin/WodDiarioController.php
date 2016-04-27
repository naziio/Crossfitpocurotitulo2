<?php

namespace App\Http\Controllers\Admin;

use App\WodDiario;
Use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WodDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $wod= WodDiario::paginate();
        $wod->setPath('wod') ;

        return view('admin.woddiario.index', compact('wod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.woddiario.create');
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
        $this->woddiario= new WodDiario($request->all());
       $this->woddiario->user_fk= $user->id;
        $this->woddiario->save();

        return redirect()->route('admin.woddiario.index', compact('woddiario'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $woddiario= WodDiario::paginate();
        $woddiario->setPath('woddiario') ;

        return view('admin.woddiario.show', compact('woddiario'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $woddiario= WodDiario::findOrfail($id);

        return view('admin.woddiario.edit',['woddiario'=>$woddiario]);
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
        $woddiario= WodDiario::findOrfail($id);

        $data=$request->all();
        $woddiario->fill($data);


        $woddiario->save();
        session::flash('message','WOD editado');
        return redirect()->route('admin.woddiario.index',array($woddiario->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $woddiario= WodDiario::findOrfail($id);
        $woddiario->delete();

        session::flash('message','WOD eliminado');
        return redirect()->route('admin.woddiario.index');
    }
}
