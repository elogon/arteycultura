<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cultural_event extends Model
{
    protected $fillable = [
		'name_cultural_event',
		'description',
		'file',
		'start_date',
		'end_date',
		'stand_out',
		'category_id'
		
	];
	public function category() {
        return $this->hasManys('App\Category');
    }
}
