<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Projet::all();
        //$datas = User::all();
        //dd($datas);

        return view('dashboard.projet', compact("datas"));
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
            'name' => 'required|string|max:255',
            'file' => 'nullable|string|max:255',
            'startDate' => 'required|string|max:255',
            'endDate' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);
 
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        $request['slug'] = Str::random(8);
        $request['user_id'] = Auth::user()->id;

        Projet::create($request->all());


        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show($slug = "")
    {
        //
        $datas = Projet::with('activites')->where("slug",$slug)->first();
        //$datas = [];
        //dd($datas);
        return view("dashboard.activite", compact('datas'));
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
    public function update(Request $request, Projet $projet)
    {
        //
        
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'file' => 'nullable|string|max:255',
            'startDate' => 'required|string|max:255',
            'endDate' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);
 
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }
        
        $projet->update([
            'name' => $request->input("name"),
            'file' => $request->input("file"),
            'startDate' => $request->input("startDate"),
            'endDate' => $request->input("endDate"),
            'description' => $request->input("description"),
        ]);


        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        if($projet){
            $projet->update([
                "is_delete" => true
            ]);
        }
        notify()->preset('delete');;
        return back();
    }
}
