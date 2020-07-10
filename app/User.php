<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;



class User extends Authenticatable
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname',
        'document_type',
        'num_document',
        'email',
        'status,',
        'password',
        'rol_id'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function research_seedbed() {
        return $this->hasMany('App\Research_seedbed');
    }
    public function cultural_events() {
        return $this->hasMany('App\Cultural_event');
    }
    public function publications() {
        return $this->hasMany('App\Publication');
    }
    
    
}