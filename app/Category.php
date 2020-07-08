<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable = [
        'name',
        'image',
        'description'
    ];
    public function research_seedbed() {
        return $this->hasMany('App\Research_seedbed');
    }
    public function cultural_event() {
        return $this->hasMany('App\Cultural_event');
    }
}