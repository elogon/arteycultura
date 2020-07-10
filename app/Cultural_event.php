<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cultural_event extends Model
{
    protected $fillable = [
		'name',
		'description',
		'file',
		'start_date',
		'end_date',
		'category_id'
		
	];
	public function category() {
        return $this->belongsTo('App\Category');
    }
}
