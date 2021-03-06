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
            $vehicules = Vehicule::all();
            $vehicule = new Vehicule();
            $vehicule->marque = $request->input('marque');
            $vehicule->matricule = $request->input('matricule');
            $vehicule->proprietaire = $request->input('proprietaire');                   
            $vehicule->dega = $request->input('dega');
            
            $vehicule->prix = $request->input('prix');
            try{
            $vehicule->save();
            return redirect('/');
            } catch(\Exception $e){
                $array = array( $request->input('marque'), $request->input('matricule'), $request->input('proprietaire'),$request->input('dega'));
            return view('vehicule',['vehicules'=>$vehicules,'array'=>$array,'layout'=>'att']);
                
            }catch(\Throwable $e){
                $array = array( $request->input('marque'), $request->input('matricule'), $request->input('proprietaire'),$request->input('dega'));
            return view('vehicule',['vehicules'=>$vehicules,'array'=>$array,'layout'=>'att']);
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
        $vehicules = Vehicule::all();
        $vehicule = Vehicule::find($id);
        $vehicule->marque = $request->input('marque');
        $vehicule->matricule = $request->input('matricule');
        $vehicule->proprietaire = $request->input('proprietaire');                   
        $vehicule->dega = $request->input('dega');
        
        $vehicule->prix = $request->input('prix');
          try{
            $vehicule->save();
            return redirect('/');
            } catch(\Exception $e){
                $array = array( $request->input('marque'), $request->input('matricule'), $request->input('proprietaire'),$request->input('dega'));
            return view('vehicule',['vehicules'=>$vehicules,'vehicule'=>$vehicule,'array'=>$array,'layout'=>'attt']);
                
            }catch(\Throwable $e){
                $array = array( $request->input('marque'), $request->input('matricule'), $request->input('proprietaire'),$request->input('dega'));
            return view('vehicule',['vehicules'=>$vehicules,'vehicule'=>$vehicule,'array'=>$array,'layout'=>'attt']);
            };
        
    
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
