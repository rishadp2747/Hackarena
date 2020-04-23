<?php

namespace App\Http\Controllers;

use Validator;
use Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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



    public function findme($id){
        //function to show findme challenge page
        return view('pages.findme',['title' => 'Find Me', 'id' => $id]);
    }

    public function letHerLogin($id){
        //function to show letHerLogin challenge page
        return view('pages.letHerLogin',['title' => 'Let Her Login', 'id' => $id]);
    }


    public function letHerForgot($id){
        //function to show letHerForgot challenge page
        return view('pages.letHerForgot',['title' => 'Let Her Forgot', 'id' => $id]);
    }

    public function whoAmI($id){
        //function to show whoAmI challenge page
        return view('pages.whoAmI',['title' => 'Who Am I', 'id' => $id]);
    }

    public function chessBoard($id){
        //function to show chessBoard challenge page
        return view('pages.chessBoard',['title' => 'Chess Board', 'id' => $id]);
    }

    public function secretMessage($id){
        //function to show secretmessage challenge page
        return view('pages.secretMessage',['title' => 'Secret Messsage Form NASA', 'id' => $id]);
    }

    public function injection($id){
        //function to show injection challenge page
        return view('pages.injection',['title' => 'Injection for CORONA', 'id' => $id]);
    }


    public function login($id){
        //function to show log challenge page
        return view('pages.login',['title' => 'Login', 'id' => $id]);
    }

    public function osint($id){
        //function to show Osint challenge page
        return view('pages.osint',['title' => 'OSINT', 'id' => $id]);
    }

    public function quiz($id){
        //function to show quiz challenge page
        return view('pages.quiz',['title' => 'Quiz', 'id' => $id]);
    }

    public function popmeup($id){
        //function to show quiz challenge page
        return view('pages.popmeup',['title' => 'Pop Me Up', 'id' => $id]);
    }







    public function letHerCheck(Request $request){
        //function to check the details to push flag

        //Don't passed id because by altering the id's in url there is a chance of seeing another flags
        //So don't change the route_name of the challnge Let Her Login

        $validator = Validator::make($request->all(), [
            'mother' => 'required',
            'father' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }elseif($request->input('mother') === 'Rochell Kramer' and $request->input('father') === 'Alan Mitnic'){
            $flag = DB::table('challenges')->where('challenge_route', 'letherlogin' )->value('challenge_flag');
            return redirect()->back()->with('success', $flag);
        }else{
            return redirect()->back()->with('error','Invalid Details');
        }
    }


    public function checkBoard(Request $request){
        //function to check the details to push flag

        //Don't passed id because by altering the id's in url there is a chance of seeing another flags
        //So don't change the route_name of the challnge checkboard

        $validator = Validator::make($request->all(), [
            'code' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }elseif($request->input('code') === 'FCS Devloped Hackarena CTF'){
            $flag = DB::table('challenges')->where('challenge_route', 'chessboard' )->value('challenge_flag');
            return redirect()->back()->with('success', $flag);
        }else{
            return redirect()->back()->with('error','Invalid Details');
        }
    }

    public function checkMessage(Request $request){
        //function to check the details to push flag

        //Don't passed id because by altering the id's in url there is a chance of seeing another flags
        //So don't change the route_name of the challnge secremessage

        $validator = Validator::make($request->all(), [
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }elseif($request->input('message') === 'FCS IS JUST AWESOME'){
            $flag = DB::table('challenges')->where('challenge_route', 'secretmessage' )->value('challenge_flag');
            return redirect()->back()->with('success', $flag);
        }else{
            return redirect()->back()->with('error','Invalid Details');
        }
    }


    public function checkInjection(Request $request){
        //function to check the details to push flag

        //Don't passed id because by altering the id's in url there is a chance of seeing another flags
        //So don't change the route_name of the challnge injection

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }elseif(DB::table('dummies')->select('id')->whereRaw("username = '".$request->input('username')."' and password = '".$request->input('password')."' ")->count() == 1){
            $flag = DB::table('challenges')->where('challenge_route', 'injection' )->value('challenge_flag');
            return redirect()->back()->with('success', $flag);
        }else{
            return redirect()->back()->with('error','Invalid Details');
        }

    }


    public function checkLogin(Request $request){
        //function to check the details to push flag

        //Don't passed id because by altering the id's in url there is a chance of seeing another flags
        //So don't change the route_name of the challnge injection

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }elseif($request->input('username') === 'hacker' and $request->input('password') === 'hacked'){
            $flag = DB::table('challenges')->where('challenge_route', 'loginme' )->value('challenge_flag');
            return redirect()->back()->with('success', $flag);
        }else{
            return redirect()->back()->with('error','Invalid Details');
        }

    }



}
