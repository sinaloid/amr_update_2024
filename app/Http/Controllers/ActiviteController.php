<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //$request['user_id'] = Auth::user()->id;

        Activite::create($request->all());


        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function show($slug = "")
    {
        
        //
        $datas = Activite::with('participants')->where("slug",$slug)->first();
        //dd($datas);
        //$datas = [];
        //dd($datas);
        return view("dashboard.participant", compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function edit(Activite $activite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activite $activite)
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
        
        $activite->update([
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
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activite $activite)
    {
        if($activite){
            $activite->update([
                "is_delete" => true
            ]);
        }
        notify()->preset('delete');;
        return back();
    }
}
