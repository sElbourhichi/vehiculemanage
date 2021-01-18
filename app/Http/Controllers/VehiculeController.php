<?php

namespace App\Http\Controllers;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules = Vehicule::all();
        return view('vehicule',['vehicules'=>$vehicules,'layout'=>'index']);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicules = Vehicule::all();
        return view('vehicule',['vehicules'=>$vehicules,'layout'=>'create']);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(is_integer($request->input('prix'))){
            $vehicule = new Vehicule();
            $vehicule->marque = $request->input('marque');
            $vehicule->matricule = $request->input('matricule');
            $vehicule->proprietaire = $request->input('proprietaire');                   
            $vehicule->dega = $request->input('dega');
            
            $vehicule->prix = $request->input('prix');
            $vehicule->save();
            return redirect('/');
        } else {
            $a = '<script type="text/javascript">window.alert("the price should be a number");</script>';
            return view('vehicule',['layout'=>'att']);


        }

    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicule = Vehicule::find($id);
        $vehicules = Vehicule::all();

        return view('vehicule',['vehicules'=>$vehicules,'vehicule'=>$vehicule,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicule = Vehicule::find($id);
        $vehicules = Vehicule::all();

        return view('vehicule',['vehicules'=>$vehicules,'vehicule'=>$vehicule,'layout'=>'edit']);
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
        try{
        $vehicule = Vehicule::find($id);
        $vehicule->marque = $request->input('marque');
        $vehicule->matricule = $request->input('matricule');
        $vehicule->proprietaire = $request->input('proprietaire');                   
        $vehicule->dega = $request->input('dega');
        
        $vehicule->prix = $request->input('prix');
        $vehicule->save();
        return redirect('/');
        }catch(\Exception $e){
            
            echo '<script type="text/javascript">window.alert("the price should be a number");</script>';

        }catch (\Throwable $e) {
            echo '<script type="text/javascript">window.alert("the price should be a number");</script>';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicule = Vehicule::find($id);
        $vehicule->delete();
        return redirect('/');
    }
}
