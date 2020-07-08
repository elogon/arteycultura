<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users_research extends Model
{
    protected $fillable = [
        'user_id',
        'research_seedbed_id'
    ];
}
