<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Carburant;
use App\Models\User;

class CarburantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Auth::user()->with('carburants')->first();
        //$datas = User::all();
        //dd($datas);

        return view('dashboard.carburant', compact("datas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'destination' => 'required|string|max:255',
            'distance_aller_retour' => 'required|string|max:255',
            'distance_interne' => 'required|string|max:255',
            'cout_au_km' => 'nullable|string|max:255',
            'estimation_du_cout' => 'nullable|string|max:255',
            'date_sortie' => 'required|string|max:255',
            'date_retour' => 'required|string|max:255',
            'observation' => 'nullable|string|max:1000',
        ]);
 
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        $request['slug'] = Str::random(8);
        $request['user_id'] = Auth::user()->id;

        Carburant::create($request->all());


        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show(Projet $projet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carburant $carburant)
    {
        //
        
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'destination' => 'required|string|max:255',
            'distance_aller_retour' => 'required|string|max:255',
            'distance_interne' => 'required|string|max:255',
            'cout_au_km' => 'nullable|string|max:255',
            'estimation_du_cout' => 'nullable|string|max:255',
            'date_sortie' => 'required|string|max:255',
            'date_retour' => 'required|string|max:255',
            'observation' => 'nullable|string|max:1000',
        ]);
 
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }
        
        $carburant->update([
            'destination' => $request->input("destination"),
            'distance_aller_retour' => $request->input("distance_aller_retour"),
            'distance_interne' => $request->input("distance_interne"),
            'cout_au_km' => $request->input("cout_au_km"),
            'estimation_du_cout' => $request->input("estimation_du_cout"),
            'date_sortie' => $request->input("date_sortie"),
            'date_retour' => $request->input("date_retour"),
            'observation' => $request->input("observation"),
        ]);


        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carburant  $carburant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carburant $carburant)
    {
        //
        if($carburant){
            $carburant->update([
                "is_delete" => true
            ]);
        }
        notify()->preset('delete');;
        return back();
    }
}

