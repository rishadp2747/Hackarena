<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Challenge;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        return view('home');
=======

        $roles = DB::table('challenges')->pluck('challenge_name');
        $score  = Auth::user()->total_score;

        return view('pages.dashboard',['title' => 'Dashboard', 'challenges' => $roles, 'score' => $score]);
>>>>>>> 6d46e1a94d9fc46aada29ffbb5d90259890f344c
    }
}
