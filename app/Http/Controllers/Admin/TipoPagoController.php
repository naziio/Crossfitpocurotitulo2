<?php

namespace App\Http\Controllers\Admin;

use App\Tipopago;
use Illuminate\Http\Request;
use app\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class TipopagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tipopago= Tipopago::paginate();
        $tipopago->setPath('tipopago') ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
           $data2 = TipoPago::last()
            ->lists('id','id');

          $selected = array();

        return view('admin.pago.create',compact('data2', 'selected'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        $data2  = DB::table('tipopago')
            ->select('id')
            ->orderBy('id', 'desc')
            ->first()->id
        ;

        $selected = array();
        $data1 = User::lists('name','id');
        $this->tipopago= new Tipopago($request->all());
        $this->tipopago->save();
        return view('admin.pago.show', compact('tipopago','data1','data2','selected'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin.pago.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $tipopago= Tipopago::findOrfail($id);

        return view('admin.tipopago.edit',['tipopago'=>$tipopago]);
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
        $tipopago= Tipopago::findorfail($id);

        $data=$request->all();
        $tipopago->fill($data);


        $tipopago->save();
        session::flash('message','Tipopago editada');
        return redirect()->route('admin.tipopago.index',array($tipopago->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $tipopago= Tipopago::findOrFail($id);
        $tipopago->delete();

        session::flash('message','tipopago eliminado de los registros');
        return redirect()->route('admin.pago.index');
    }
}
