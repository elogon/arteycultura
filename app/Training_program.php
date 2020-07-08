<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Training_program extends Model
{
    protected $fillable = [
    	'name_program',
    	'id_program'
    ];
public function apprentice() {
        return $this->hasMany('App\Apprentice');
    }
}	