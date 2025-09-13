<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\User;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas = Agent::where([
            'is_delete' => false,
            'type' => "agent"
        ])->orderByDesc('id')->get();
        return view('dashboard.agent', compact("datas"));
    }

    public function membre()
    {

        $datas = Agent::where([
            'is_delete' => false,
            'type' => "membre"
        ])->orderByDesc('id')->get();
        return view('dashboard.agent_membre', compact("datas"));
    }

    public function equipe()
    {

        $datas = Agent::where([
            'is_delete' => false,
            'type' => "equipe"
        ])->orderByDesc('id')->get();
        return view('dashboard.agent_equipe', compact("datas"));
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
        $request['slug'] = Str::random(8);
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'post_occupe' => 'required|string|max:255',
            'slug' => 'required|string|max:8',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }



        $imageName = Str::random(10) . '.' . $request->image->getClientOriginalExtension();

        //dd($request->all());
        // Enregistrer l'image dans le dossier public/images
        $imagePath = $request->image->move(public_path('images'), $imageName);

        if ($imagePath) {
            // Créer la nouvelle catégorie de média
            $data = Agent::create([
                "nom" => $request['nom'],
                "type" => $request['type'],
                "post_occupe" => $request['post_occupe'],
                "slug" => $request['slug'],
                "image" => 'images/' . $imageName,
                "description" => $request['description'],
            ]);

        }
        notify()->preset('success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit(Actualite $actualite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {

        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'post_occupe' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string|max:100000',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        $agent->update([
            "nom" => $request['nom'],
            "type" => $request['type'],
            "post_occupe" => $request['post_occupe'],
            "description" => $request['description'],
        ]);
        if ($request->hasFile('image')) {
            // Générer un nom aléatoire pour l'image
            $imageName = Str::random(10) . '.' . $request->image->getClientOriginalExtension();

            // Enregistrer l'image dans le dossier public/images
            $imagePath = $request->image->move(public_path('images'), $imageName);
            //$request['image'] = 'actualites/' . $imageName;

            if ($imagePath) {
                // Créer la nouvelle catégorie de média
                Storage::delete($agent->image);
                $agent->update([
                    "image" => 'images/' . $imageName,
                ]);

            }
        }
        notify()->preset('success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        //
        if($agent){
            $agent->update([
                "is_delete" => true
            ]);
        }
        notify()->preset('delete');
        return back();
    }

}
