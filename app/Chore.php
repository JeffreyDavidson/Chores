<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chore extends Model
{
    protected $guarded = [];

    protected $dates = ['due_at'];
}
