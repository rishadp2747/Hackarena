<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfomance extends Model
{
    //
    protected $table = 'perfomances';

    //primary key
    public $primaryKey = 'id';

    //timestamps
    public $timestamps = true;

    //
    protected $fillable = [
        'challenge_id', 'user_id', 'start_time', 'end_time'
    ];
}
