<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function users()
    {
      $this->belongsToMany('App\User');
    }
}
