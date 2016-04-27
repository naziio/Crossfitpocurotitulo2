<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\BioUser;
Use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class BioUserController extends Controller
{

    public function __construc()
    {





    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $user = $request->user(); //retorno al usuario logueado
        $bios=BioUser::where('user_id_fk', $user->id)->get(); // recupera la biografia del usuario logueado
        //dd($bios);





        return view('admin.users.bio.index',['bios' =>$bios, 'user' => $user ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)

    {
        $user = $request->user(); // Retorna al usuario logueado


        $bios = BioUser::where('user_id_fk', $user->id)->get()->first();



        return view('admin.users.bio.create',['bios' =>$bios, 'user' => $user ]);
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
        //dd($user);
        $this->bios= new BioUser($request->all());
        $this->bios->user_id_fk= $user->id;
        $this->bios->save();

        return redirect()->route('admin.users.bio.index')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request)
    {

         $user = $request->user();


       $bios = BioUser::where('user_id_fk', $user->id)->get();


        return view('admin.users.bio.show', ['bios' =>$bios, 'user' => $user ]);


      //  return view('admin.users.bio.show',compact('bios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)

    {
        //$usuario=$request->user();
        $bios= BioUser::findOrfail($id);

        return view('admin.users.bio.edit',['bios'=>$bios]);
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
        $bios= BioUser::findorfail($id);

        $data=$request->all();
       $bios->fill($data);


        $bios->save();
        session::flash('message','Biografia editada');
        return redirect()->route('bio.show',array($bios->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id,Request $request)
    {
        $users= User::findOrFail($id);
        $users->delete();

        session::flash('message','Usuario eliminado de los registros');
        return redirect()->route('admin.users.index');
    }

}
