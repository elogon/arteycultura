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
        'quarter_id',
        'category_id'
    ];
    public function quarter() {
        return $this->belongsTo('App\Quarter');
    }
    public function category() {
        return $this->belongsTo('App\Category');
    }
}