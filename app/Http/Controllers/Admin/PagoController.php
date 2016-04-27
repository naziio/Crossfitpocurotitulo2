<?php

namespace App\Http\Controllers\Admin;

use App\TipoPago;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Pago;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $pago= Pago::all();

        $pago= Pago::paginate();
        $pago->setPath('pago') ;

        return view('admin.pago.index', compact('pago'));
       // return view('admin.pago.index')->with('pago',$pago);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $data1 = User::lists('name','name');
        $selected = array();

        return view('admin.pago.create',compact('data1', 'selected'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {


        $tipopago= TipoPago::all();
        $this->pago= new pago($request->all());
        $this->pago->save();

        return redirect()->route('admin.pago.index', compact('pago','tipopago'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        $data1 = User::lists('name','id');
       $data2  = DB::table('tipopago')
       ->select('id')
        ->orderBy('id', 'desc')
        ->first()->id
        ;

        $selected = array();
        return view('admin.pago.show', compact('data1','data2','selected'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $pago= pago::findOrfail($id);

        $data1 = User::lists('name','id');

        $data2  = DB::table('tipopago')
            ->select('id')
            ->orderBy('id', 'desc')
            ->first()->id
        ;
        $selected = array();
        return view('admin.pago.edit', compact ('pago','data1','data2','selected'));
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
        $pago= pago::findorfail($id);

        $data=$request->all();
        dd($data);
        $pago->fill($data);


        $pago->save();
        session::flash('message','pago editado');
        return redirect()->route('admin.pago.index',array($pago->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $pago= pago::findOrFail($id);
        $pago->delete();

        session::flash('message','pago eliminado de los registros');
        return redirect()->route('admin.pago.index');
    }
}
