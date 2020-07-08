<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Research_seedbed extends Model
{
    protected $fillable = [
        'name_research_seedbed',
        'description',
        'days',
        'start_date',
        'end_date',
        'user_id',
        'quarter_id',
        'category_id'
    ];
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function quarter() {
        return $this->belongsTo('App\Quarter');
    }
    public function category() {
        return $this->belongsTo('App\Category');
    }
}