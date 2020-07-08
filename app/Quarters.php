<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Quarters extends Model
{
    protected $fillable = [
        'num_quarter',
        'start_date',
        'end_date',   
    ];
    public function research_seedbed() {
        return $this->belongsTo('App\Research_seedbed');
    }
}