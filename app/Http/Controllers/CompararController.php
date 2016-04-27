<?php

namespace App\Http\Controllers;

use App\BioUser;
use App\Comparar;
use App\User;
use App\WodFijo;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class CompararController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = User::all()
            ->lists('name','id');
        $data2 = User::all()
            ->lists('name','id');
        $selected = array();

        return view('comparar.index',compact('data','data2', 'selected'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user= new User();
        $user->id=$request->id;
        $user->id2=$request->id2;

        $comparar= Comparar::where('user_id_fk',$request->id)->take(10)->get();
        $comparar2= Comparar::where('user_id_fk',$request->id2)->take(10)->get();
        $user1=BioUser::where('user_id_fk',$request->id)->get();
        $user2=BioUser::where('user_id_fk',$request->id2)->get();

       // $this->comparar->user_id_fk= $user->id;
       // $this->comparar2->user_id_fk=$user->id2;
      // dd($comparar2);
      /* SELECT `peso`,`tiempo`,`fecha`
FROM `wodfijo`
WHERE `user_id_fk` = 1
AND `nombre` = 'test2'
AND tiempo =(SELECT MIN(tiempo)
FROM `wodfijo`
where `user_id_fk` = 1)*/
          // ->groupby('user_id_fk')

     // ;
//wod angie para los 2 usuarios a comparar
$angie1= DB::table('wodfijo')
    ->select(DB::raw('min(tiempo) as tiempo, nombre,peso,fecha'))
    ->where('user_id_fk',$request->id)
    ->where('nombre','Angie')->get();
 $angie2= DB::table('wodfijo')
   ->select(DB::raw('min(tiempo) as tiempo, nombre,peso,fecha'))
    ->where('user_id_fk',$request->id2)
     ->where('nombre','Angie')->get();

//wod fran para los 2 usuarios a comparar
        $fran1= DB::table('wodfijo')
            ->select(DB::raw('min(tiempo) as tiempo, nombre,peso,fecha'))
            ->where('user_id_fk',$request->id)
            ->where('nombre','Fran')->get();
        $fran2= DB::table('wodfijo')
            ->select(DB::raw('min(tiempo) as tiempo, nombre,peso,fecha'))
            ->where('user_id_fk',$request->id2)
            ->where('nombre','Fran')->get();

//wod chelsea para los 2 usuarios a comparar

        $chelsea1= DB::table('wodfijo')
            ->select(DB::raw('min(tiempo) as tiempo, nombre,peso,fecha'))
            ->where('user_id_fk',$request->id)
            ->where('nombre','Chelsea')->get();
        $chelsea2= DB::table('wodfijo')
            ->select(DB::raw('min(tiempo) as tiempo, nombre,peso,fecha'))
            ->where('user_id_fk',$request->id2)
            ->where('nombre','Chelsea')->get();


//wod barbara para los 2 usuarios a comparar

      $barbara1= DB::table('wodfijo')
         ->select(DB::raw('min(tiempo) as tiempo, nombre,peso,fecha'))
          ->where('user_id_fk',$request->id)
          ->where('nombre','Barbara')->get();
        $barbara2= DB::table('wodfijo')
            ->select(DB::raw('min(tiempo) as tiempo, nombre,peso,fecha'))
            ->where('user_id_fk',$request->id2)
            ->where('nombre','Barbara')->get();

//wod cindy para los 2 usuarios a comparar
        $cindy1= DB::table('wodfijo')
            ->select(DB::raw('min(tiempo) as tiempo, nombre,peso,fecha'))
            ->where('user_id_fk',$request->id)
            ->where('nombre','Cindy')->get();
        $cindy2= DB::table('wodfijo')
            ->select(DB::raw('min(tiempo) as tiempo, nombre,peso,fecha'))
            ->where('user_id_fk',$request->id2)
            ->where('nombre','cindy')->get();

//wod helen para los 2 usuarios a comparar
        $helen1= DB::table('wodfijo')
            ->select(DB::raw('min(tiempo) as tiempo, nombre,peso,fecha'))
            ->where('user_id_fk',$request->id)
            ->where('nombre','Helen')->get();
        $helen2= DB::table('wodfijo')
            ->select(DB::raw('min(tiempo) as tiempo, nombre,peso,fecha'))
            ->where('user_id_fk',$request->id2)
            ->where('nombre','Helen')->get();

$selected= array();
        return view('comparar.show', compact('comparar', 'comparar2','selected','user1','user2','angie1','angie2','fran1','fran2','chelsea1','chelsea2','helen1','helen2','barbara1','barbara2','cindy1','cindy2'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request, $id)
    {
       // $this->comparar= new Comparar($request->all());
        //dd($request);
       // $this->comparar= new Comparar($request->all());
        /*$this->noticia= new Noticia($request->all());
        $this->noticia->user_fk= $user->id;
        $this->noticia->save();*/

return view('comparar.show', compact('comparar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
