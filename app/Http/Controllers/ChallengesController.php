<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChallengesController extends Controller
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
     

    public function findme($id)
    {   
        //user authenticated 
        if (Auth::check()) {
            return view('pages.findme',['title' => 'Find Me','id' => $id]);
        }else{
            return view('auth.login', ['title' => 'Login']);
        }
        
    }
    public function letherlogin($id)
    {   
        //user authenticated 
        if (Auth::check()) {
            return view('pages.letherlogin',['title' => 'Let Her Login','id' => $id]);
        }else{
            return view('auth.login', ['title' => 'Login']);
        }
        
    }
    public function logmein($id)
    {   
        //user authenticated 
        if (Auth::check()) {
            return view('pages.logmein',['title' => 'Log Me In','id' => $id]);
        }else{
            return view('auth.login', ['title' => 'Login']);
        }
        
    }
    public function letherforgot($id)
    {   
        //user authenticated 
        if (Auth::check()) {
            return view('pages.letherforgot',['title' => 'Let Her Forgot','id' => $id]);
        }else{
            return view('auth.login', ['title' => 'Login']);
        }
        
    }
    public function whoami($id)
    {   
        //user authenticated 
        if (Auth::check()) {
            return view('pages.who',['title' => 'Who Am I','id' => $id]);
        }else{
            return view('auth.login', ['title' => 'Login']);
        }
        
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
    public function destroy($id)
    {
        //
    }
}
