<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
     protected $fillable = array('user_id', 'speaker_id', 'result');

}
