<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Models\Adhesion;

class AdhesionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['create']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adhesion()
    {
        $datas = Adhesion::all();

        return view('dashboard.adherent', compact('datas'));
    }

    public function index()
    {
        $datas = Adhesion::all();

        return view('dashboard.membre');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //dd($request->all());
        //$pwd = $request['password'] = Str::random(10);
        //$request['password'] = Hash::make($request['password']);
        $request['slug'] = Str::slug(Str::random(10));

        $user = Adhesion::create($request->all());
           
            $to = $user->email;
            $subject = 'Bienvenue chez AMR BURKINA';
            $data = [
                'email' => $user->email,
                "mdp" => "",
                "details" =>"Cordialement"
            ];

            $files = [
                public_path('files/adhesion/formulaire_d_ahdesion.doc'),
                public_path('files/adhesion/reglement_amr.pdf'),
                public_path('files/adhesion/formulaire_d_ahdesion.doc'),
                public_path('attachments/statut_amr.pdf'),
            ];
            
            Mail::send('mails.adhesion', compact('data'), function ($message) use ($to, $subject) {
            
                $files = [
                    public_path('files/adhesion/reglement_amr.pdf'),
                    public_path('files/adhesion/formulaire_d_ahdesion.doc'),
                    public_path('files/adhesion/statut_amr.pdf'),
                ];
                $message->to($to)->subject($subject);
                foreach ($files as $file){
                    $message->attach($file);
                }   
            
            });
            //notify()->success('Laravel Notify is awesome!');
            notify()->preset('user-request');
            return redirect()->route('index');;
        
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteAdherent($slug)
    {
        $personnel = Adhesion::where('slug',$slug);
        $tmp = $personnel->first();
        if(isset($tmp) && Auth::user()->authorisation == 0){
            $personnel->delete();
        }
        //Session::flash('supprimer',"Les données ont bien été supprimées.")
        notify()->preset('delete');;
        return back();
    }

    public function destroy($slug)
    {
        $personnel = User::where('slug',$slug);
        $tmp = $personnel->first();
        if(isset($tmp) && Auth::user()->authorisation == 0){
            $personnel->get()->delete();
        }
        //Session::flash('supprimer',"Les données ont bien été supprimées.");
        return back();
    }
}
