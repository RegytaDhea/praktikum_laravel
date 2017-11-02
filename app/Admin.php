<?php

namespace App;

use Illuminate\Notifications\Notifiable; //untuk import notifikasi
use Illuminate\Foundation\Auth\User as Authenticatable; //import authentification

class Admin extends Authenticatable
{
    use Notifiable;
	protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','job_title',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
}
