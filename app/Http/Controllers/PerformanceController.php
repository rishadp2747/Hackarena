<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\performance;
use Carbon\Carbon;

class PerformanceController extends Controller
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
    public function store(Request $request,$id)
    {   
        $user_flag = $request->input('flag');
        $user_id = Auth::id();
        $flag= DB::table('challenges')->where('id', $id)->value('challenge_flag');
        $validator = Validator::make($request->all(), [
            'flag' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        if(DB::table('performances')->where(['user_id' => $user_id, 'challenge_id' => $id])->exists())
            {  
                  return redirect()->back()->with('info','Note: You already Captured this Flag!');
            }
        else{
        if($user_flag==$flag){
            $score= DB::table('challenges')->where('id', $id)->value('challenge_score');
            $user_score= DB::table('users')->where('id', $user_id)->value('total_score');
            User::where('id', $user_id)->update(['total_score' => $user_score + $score]);
            $total=$user_score + $score;
            $data=array("created_at"=>Carbon::now()->toDateTimeString(),"updated_at"=>Carbon::now()->toDateTimeString(),"user_id"=>$user_id,"challenge_id"=>$id,"start_time"=> now() ,"end_time"=> now());
            DB::table('performances')->insert($data);
            return redirect()->route('home')->with('success','Congragulations!');

        }
      }
    }
    public function checkit(Request $request,$id)
    {
        $flag= DB::table('challenges')->where('id', $id)->value('challenge_flag');
        $mothersname = $request->input('mname');
        $fathersname = $request->input('fname');
        if($mothersname=="x"){
            if($fathersname=="y"){
                return redirect()->route('letherforgot',['id'=>$id])->with('info','This is your flag :-'.$flag);
            }
        }
        else{
            return redirect()->route('letherforgot',['id'=>$id])->with('info','That was a wrong info!');
        }

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
