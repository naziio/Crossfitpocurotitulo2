<?php

namespace App\Http\Controllers\Admin;

use App\SubirWod;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SubirWodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $subirwod= SubirWod::paginate();
        $subirwod->setPath('subirwod') ;

        return view('admin.subirwod.index', compact('subirwod'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.subirwod.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user = $request->user();

        $this->subirwod= new SubirWod($request->all());
        $this->subirwod->user_fk= $user->id;
        $this->subirwod->save();

        return redirect()->route('admin.subirwod.index', compact('subirwod'));
        //->with('message','store');
        // return ('Estoy en el store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $subirwod= SubirWod::findOrfail($id);

        return view('admin.subirwod.edit',['subirwod'=>$subirwod]);
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
        $subirwod= SubirWod::findorfail($id);

        $data=$request->all();
        $subirwod->fill($data);


        $subirwod->save();
        session::flash('message','subirwod editada');
        return redirect()->route('admin.subirwod.index',array($subirwod->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $subirwod= SubirWod::findOrFail($id);
        $subirwod->delete();

        session::flash('message',' eliminado de los registros');
        return redirect()->route('admin.subirwod.index');
    }
}
