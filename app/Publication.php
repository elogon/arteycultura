<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'title',
        'description',
        'file',
        'apprentice_id',
    ];
    public function apprentice() {
        return $this->hasMany('App\Apprentice');
    }
}