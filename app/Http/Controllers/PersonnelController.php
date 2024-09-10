<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class PersonnelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function membres()
    {
        $datas = User::all();

        return view('dashboard.membre', compact('datas'));
    }

    public function index()
    {
        $datas = User::all();

        return view('dashboard.membre');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pwd = $request['password'] = Str::random(10);
        $request['password'] = Hash::make($request['password']);
        $request['slug'] = Str::slug(Str::random(10));

        $user = User::create($request->all());
           
            $to = $user->email;
            $subject = 'Bienvenue chez AMR BURKINA';
            $data = [
                'email' => $user->email,
                "mdp" => $pwd,
                "details" =>"Cordialement"
            ];
            
            Mail::send('email', compact('data'), function ($message) use ($to, $subject) {
            $message->to($to)->subject($subject);});
            //notify()->success('Laravel Notify is awesome!');
            notify()->preset('user-created');
            return redirect()->route('membres');;
        
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
    public function deletePersonnel($slug)
    {
        $personnel = User::where('slug',$slug);
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
