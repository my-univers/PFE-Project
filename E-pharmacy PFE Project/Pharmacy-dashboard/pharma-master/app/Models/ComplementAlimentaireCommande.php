<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplementAlimentaireCommande extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function complementAlimentaire()
    {
        return $this->belongsTo(ComplementsAlimentaires::class);
    }
}