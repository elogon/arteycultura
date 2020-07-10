<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'title',
        'description',
        'file',
        'user_id'
    ];
    public function user() {
        return $this->hasOne('App\User');
    }
}