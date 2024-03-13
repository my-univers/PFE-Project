<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplementsAlimentaires extends Model
{
    use HasFactory;

    public function complementAlimentaireCommandes()
    {
        return $this->hasMany(ComplementAlimentaireCommande::class);
    }
}