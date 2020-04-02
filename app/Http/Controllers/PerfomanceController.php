<?php

namespace App\Http\Controllers;

use Validator;
Use Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Perfomance;
use App\User;


class PerfomanceController extends Controller
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

   

    private function validator(array $data, $id)
    {
        try{
            if($temp = DB::table('perfomances')->where(['challenge_id' => $id, 'user_id' =>  Auth::id()])->exists()){
                return redirect()->back()->with('info','Note: You already Captured this Flag!');
            }elseif($temp = DB::table('challenges')->where(['id' => $id, 'challenge_flag' => $data['flag']])->doesntExist()){
                return redirect()->back()->with('error','Invalid Flag');
            }else{
                return DB::table('challenges')->where('id', $id)->value('challenge_score');
            }
        }
        catch(Exception $e)
        {
            return abort(200,'Something went wrong!  Please contact Server Administrator Error-code: 204');
        }

    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data, $id)
    {
        //create an instance of perfomance table
        try
        {
            return Perfomance::create([
                'challenge_id' => $id,
                'user_id' => Auth::id(),
                'start_time' => now(),   
                'end_time' => now(),   
            ]);
        }
        catch(Exception $e)
        {
            return abort(200,'Something went wrong!  Please contact Server Administrator Error-code: 201');
        }
        
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //to validate the form details submitted
        $validator = Validator::make($request->all(), [
            'flag' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //to check the custom validation using db details
        $valid = $this->validator($request->all(), $id);

        //if the return value is number validation is success else return with above error
        if(is_numeric($valid)){

            //store the perfomance
            $perfomance = $this->create($request->all(), $id);
            try{
                $perfomance->save();
            }
            catch(Exception $e)
            {
                return abort(200,'Something went wrong!  Please contact Server Administrator Error-code: 202');
            }

            //updating the user score
           //try{                
                $user_score = DB::table('users')->where('id', Auth::id())->value('total_score');
                $user = User::where('id',Auth::id())->update(['total_score' =>$user_score + $valid]);
           //}
           //catch(Exception $e)
           //{
             //   return abort(200,'Something went wrong!  Please contact Server Administrator Error-code: 203');
           //}
            return redirect()->route('home')->with('success','Congragulations!');
        }else{
            return $valid;
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
