<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class ParticipantController extends Controller
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
        $validator = Validator::make($request->all(), [
            'lastname' => 'required|string|max:255',
            'firstname' => 'nullable|string|max:255',
            'gender' => 'required|string|max:255',
            'statut_residence' => 'required|string|max:255',
            'tranche_age' => 'required|string|max:255',
            'handicap' => 'required|string|max:255',
            'type_handicap' => 'nullable|string|max:255',
            'group_minoritaire' => 'required|string|max:255',
            'organisation' => 'required|string|max:255',
            'fonction' => 'required|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'telephone' => 'required|string|max:255',
            'email' => 'nullable|string|max:255',
            'code_participant' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'commune' => 'required|string|max:255',
            'village' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'commune' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);
 
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        $request['slug'] = Str::random(8);
        //$request['user_id'] = Auth::user()->id;

        Participant::create($request->all());


        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(Participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participant $participant)
    {
        //
        
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'lastname' => 'required|string|max:255',
            'firstname' => 'nullable|string|max:255',
            'gender' => 'required|string|max:255',
            'statut_residence' => 'required|string|max:255',
            'tranche_age' => 'required|string|max:255',
            'handicap' => 'required|string|max:255',
            'type_handicap' => 'nullable|string|max:255',
            'group_minoritaire' => 'required|string|max:255',
            'organisation' => 'required|string|max:255',
            'fonction' => 'required|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'telephone' => 'required|string|max:255',
            'email' => 'nullable|string|max:255',
            'code_participant' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'commune' => 'required|string|max:255',
            'village' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'commune' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);
 
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }
        
        $participant->update([
            'lastname' => $request->input("lastname"),
            'firstname' => $request->input("firstname"),
            'gender' => $request->input("gender"),
            'statut_residence' => $request->input("statut_residence"),
            'tranche_age' => $request->input("tranche_age"),
            'handicap' => $request->input("handicap"),
            'type_handicap' => $request->input("type_handicap"),
            'group_minoritaire' => $request->input("group_minoritaire"),
            'organisation' => $request->input("organisation"),
            'fonction' => $request->input("fonction"),
            'whatsapp' => $request->input("whatsapp"),
            'telephone' => $request->input("telephone"),
            'email' => $request->input("email"),
            'code_participant' => $request->input("code_participant"),
            'region' => $request->input("region"),
            'province' => $request->input("province"),
            'commune' => $request->input("commune"),
            'village' => $request->input("village"),
            'date' => $request->input("date"),
            'commune' => $request->input("commune"),
            'description' => $request->input("description"),
        ]);


        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participant)
    {
        //
    }
}
