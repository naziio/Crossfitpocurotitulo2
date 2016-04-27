<?php

namespace App\Http\Controllers\Admin;

use App\WodDiario;
use Illuminate\Http\Request;
Use App\User;
use App\Noticia;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use DB;


class NoticiaController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $noticia= Noticia::paginate();
        $noticia->setPath('noticia') ;

        return view('admin.noticia.index', compact('noticia'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.noticia.create');
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
        $this->noticia= new Noticia($request->all());
        $this->noticia->user_fk= $user->id;
        $this->noticia->save();

        return redirect()->route('admin.noticia.index', compact('noticia'));
            //->with('message','store');
       // return ('Estoy en el store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        $noticia= Noticia::paginate();
        $noticia->setPath('noticia') ;

        $woddiario=WodDiario::paginate();
        $woddiario->setPath('woddiario');
        $comparar= DB::table('woddiario')->orderby('fecha')->take(2)->get();

        return view('home', compact('noticia','woddiario','comparar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $noticia= Noticia::findOrfail($id);

        return view('admin.noticia.edit',['noticia'=>$noticia]);
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
        $noticia= Noticia::findorfail($id);

        $data=$request->all();
        $noticia->fill($data);


        $noticia->save();
        session::flash('message','Noticia editada');
        return redirect()->route('admin.noticia.index',array($noticia->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $noticia= Noticia::findOrFail($id);
        $noticia->delete();

        session::flash('message','Noticia eliminado de los registros');
        return redirect()->route('admin.noticia.index');
    }
}
