<?php

namespace App\Http\Controllers;

use App\Models\FichierAMR;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class FichierAMRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = FichierAMR::all();

        return view('dashboard.fichier', compact("datas"));
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
        $data = [];

        $pdf = Pdf::loadView('dashboard.fichier.formulaire_participant_pdf', $data);
        return $pdf->stream();
        return $pdf->download('formulaire.pdf');

        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FichierAMR  $fichierAMR
     * @return \Illuminate\Http\Response
     */
    public function show(FichierAMR $fichierAMR)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FichierAMR  $fichierAMR
     * @return \Illuminate\Http\Response
     */
    public function edit(FichierAMR $fichierAMR)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FichierAMR  $fichierAMR
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FichierAMR $fichierAMR)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FichierAMR  $fichierAMR
     * @return \Illuminate\Http\Response
     */
    public function destroy(FichierAMR $fichierAMR)
    {
        //
    }
}
