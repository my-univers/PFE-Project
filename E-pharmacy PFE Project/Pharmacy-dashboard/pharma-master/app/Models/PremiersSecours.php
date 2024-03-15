<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremiersSecours extends Model
{
    use HasFactory;

    public function premierSecoursCommandes()
    {
        return $this->hasMany(premierSecoursCommande::class);
    }
}

