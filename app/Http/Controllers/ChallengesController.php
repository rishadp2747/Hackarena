<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Auth\Middleware\Authenticate;


class ChallengesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function findme($id)
    {
    
        if (Auth::check()) {
        return view('pages.findme', [ 'title' => 'Find me' , 'id' => $id ]);}
        
         else{
         return view('auth.login',[ 'title' => 'Login']); }
       }
       
      public function index($id)
       {
            if (Auth::check()) {
            return view('pages.base', [ 'title' => 'base' , 'id' => $id ]);}
            
            else{
            return view('auth.login',[ 'title' => 'Login']); }
       }
      /**         
      * @param  \Illuminate\Http\Request
      *  @return \Illuminate\Http\Response
     */
       public function base(Request $request,$id)
       {
          $base = $request->input('base');
          $flag= DB::table('challenges')->where('id', $id)->value('challenge_flag');
          if($base == 'x')
          {
           return redirect()->back()->with('info',$flag);
          }
          else
              {
                  
             return redirect()-> back()->with('error','Invalid Code');
            } 
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function injectionview($id)
    {
        if (Auth::check()) {
            return view('pages.injection', [ 'title' => 'injection' , 'id' => $id ]);}
            
            else{
            return view('auth.login',[ 'title' => 'Login']); }
    }
      /**         
      * @param  \Illuminate\Http\Request
      *  @return \Illuminate\Http\Response
     */
    public function injection(Request $request,$id)
    {
      $injection_username = $request->input('injection_username');
      $injection_password = $request->input('password');
      $username=DB::raw("SELECT username FROM injection WHERE id='1'");
      $password=DB::raw("SELECT password FROM injection WHERE id='1'");
    //   $i=DB::raw("SELECT id FROM injection WHERE username='".$username."' AND password='".$password."'");
      $flag= DB::table('challenges')->where('id', $id)->value('challenge_flag');
      if($injection_username==$username && $injection_password == $password){ 
        
        return redirect()->back()->with('info',$flag);
    }
    else
        {
         return redirect()->back()->with('error','Invalid credentials');
      } 
      
    }
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
