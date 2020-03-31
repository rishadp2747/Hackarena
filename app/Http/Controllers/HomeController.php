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
        $this->middleware(['auth' => 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $roles = DB::table('challenges')->select('challenge_name','challenge_route','id')->get();
        $score  = Auth::user()->total_score;

        return view('pages.dashboard',['title' => 'Dashboard', 'challenges' => $roles, 'score' => $score]);
    }
}
