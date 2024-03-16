<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackCommande extends Model
{
    use HasFactory;

    
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function packs()
    {
        return $this->belongsTo(Pack::class);
    }
}
