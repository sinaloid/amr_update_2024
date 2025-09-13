<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\User;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas = Partenaire::where('is_delete', false)->orderByDesc('id')->get();
        return view('dashboard.partenaireDesc', compact("datas"));
    }

    public function allActualite()
    {
        //
        //$datas = Auth::user()->with('actualites')->first();
        //$datas = User::all();
        //dd($datas);
        $categories = [
            "La gouvernance locale...[GovLoc]",
            "Le genre et l’inclusion sociale...[G.I.S.]",
            "Les systèmes alimentaires durables...[S.A.D.]",
            "L’humanitaire, l’urgences et la cohésion sociale...[H.U.CO.S.]"
        ];
        $datas = Partenaire::orderByDesc('id')->where('is_delete', false)->get();
        return view('actualite', compact("datas","categories"));
    }

    public function detailActualite($slug = "")
    {
        //
        //$datas = Auth::user()->with('actualites')->first();
        //$datas = User::all();
        //dd($datas);
        $categories = [
            "La gouvernance locale...[GovLoc]",
            "Le genre et l’inclusion sociale...[G.I.S.]",
            "Les systèmes alimentaires durables...[S.A.D.]",
            "L’humanitaire, l’urgences et la cohésion sociale...[H.U.CO.S.]"
        ];
        $datas = Partenaire::orderByDesc('id')->where('is_delete', false)->get();
        $actualite = Partenaire::where('slug', $slug)->first();

        return view('actualiteDetail', compact("datas","actualite","categories"));
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
            $data = Partenaire::create([
                "nom" => $request['nom'],
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
    public function update(Request $request, Partenaire $partenaire)
    {

        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string|max:100000',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        $partenaire->update([
            "nom" => $request['nom'],
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
                Storage::delete($partenaire->image);
                $partenaire->update([
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
    public function destroy(Partenaire $partenaire)
    {
        //
        if($partenaire){
            $partenaire->update([
                "is_delete" => true
            ]);
        }
        notify()->preset('delete');
        return back();
    }

}
