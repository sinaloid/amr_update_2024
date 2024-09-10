<?php

namespace App\Http\Controllers;

use App\Models\ActionAndStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\User;

class ActionAndStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas = ActionAndStory::where([
            'is_delete' => false,
            'type' => 'action'
        ])->orderByDesc('id')->get();
        return view('dashboard.action', compact("datas"));
    }

    public function story()
    {

        $datas = ActionAndStory::where([
            'is_delete' => false,
            'type' => 'story'
        ])->orderByDesc('id')->get();
        return view('dashboard.story', compact("datas"));
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
            $data = ActionAndStory::create([
                "nom" => $request['nom'],
                "type" => $request['type'],
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
    public function update(Request $request, $actionAndStory)
    {

        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string|max:100000',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }
        $actionAndStory = ActionAndStory::find($actionAndStory);
        //dd($actionAndStory);
        $actionAndStory->update([
            "nom" => $request['nom'],
            "type" => $request['type'],
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
                Storage::delete($actionAndStory->image);
                $actionAndStory->update([
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
    public function destroy(ActionAndStory $actionAndStory)
    {
        //
        if($actionAndStory){
            $actionAndStory->update([
                "is_delete" => true
            ]);
        }
        notify()->preset('delete');
        return back();
    }

}
