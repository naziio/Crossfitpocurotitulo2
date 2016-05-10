<?php

namespace App\Http\Controllers;

use App\Evaluacion;
use App\HabilitarEvaluacion;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;

class EvaluacionController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();                        // retorna el usuario logeado

        $evaluacion = Evaluacion::where('user_id_fk', $user->id)->paginate(); // retorna los wods realizados por el usuario logeado y los ordena

        $evaluacion->setPath('evaluacion') ;

        $estado = HabilitarEvaluacion::find(1);

        return view('evaluacion.index', compact('evaluacion','user','estado'));
    }

    public function create()
    {

        return view('evaluacion.create');
    }

    public function store(Request $request)
    {
        $user = $request->user(); // Retorna al usuario logueado
        $this->evaluacion= new Evaluacion($request->all());
        $this->evaluacion->user_id_fk= $user->id;
        $this->evaluacion->save();

        return redirect()->route('evaluacion.index', compact('evaluacion'));
    }

    public function habilitaredit(Request $request)
    {

        $user= $request->user();

        $habilitar= HabilitarEvaluacion::find(1);

        return view('evaluacion.habilitar.edit',['habilitar'=>$habilitar,'user'=>$user]);
    }
    public function habilitarstore(Request $request)
    {
        $user = $request->user(); // Retorna al usuario logueado
        $this->habilitar =new HabilitarEvaluacion($request->all());
        $this->habilitar->user_id_fk= $user->id;
        $this->habilitar->save();

        return redirect()->route('evaluacion.index', compact('habilitar'));
    }

    public function habilitarupdate(Request $request)
    {
        $habilitar= HabilitarEvaluacion::find(1);

        $habilitar->fill($request->only(['estado']));

        $habilitar->save();
        session::flash('message','Evaluacion editada');
        //,array($bios->id)
        return redirect()->route('evaluacion.index');
    }

    public function show(Request $request)
    {

        $user = $request->user();
        $evaluacion= DB::table('evaluacion')
        ->where('user_id_fk', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
        return view ('evaluacion.show',compact('evaluacion'));
    }

    public function completa($id)
    {

        $evaluacion= DB::table('evaluacion')
            ->where('id', $id)
            ->get();

        return view('evaluacion.completa',['evaluacion' =>$evaluacion]);
    }
}
