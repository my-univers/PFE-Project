<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function medicamentCommandes() {
        return $this->hasMany(MedicamentCommande::class);
    }

    public function complementAlimentaireCommandes() {
        return $this->hasMany(ComplementAlimentaireCommande::class);
    }
}
