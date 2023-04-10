<?php

namespace App\Models\Auth;

// use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table ="admins";


    
    // protected $fillable = [
    //     'username', 'email', 'password',
    // ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
