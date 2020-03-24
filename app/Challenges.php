<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenges extends Model
{
    //
    protected $table = 'challenges';

    //primary key
    public $primaryKey = 'id';

    //timestamps
    public $timestamps = true;
}

