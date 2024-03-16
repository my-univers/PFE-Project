<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremiersSecours extends Model
{
    use HasFactory;

    protected $fillable = ['image_path'];

    public function premierSecoursCommandes()
    {
        return $this->hasMany(premierSecoursCommande::class);
    }

    public function packs()
    {
        return $this->belongsTo(Pack::class);
    }
}

