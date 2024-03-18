<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable, HasFactory;

    protected $fillable = [
        'username',
        'email',
        'mot_de_passe',
        'photo'
    ];

    protected $table = 'admins';

    protected $hidden = [
        'mot_de_passe',
    ];

}
