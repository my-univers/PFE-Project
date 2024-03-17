<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;

    public function premiersSecours()
    {
        return $this->belongsTo(PremiersSecours::class);
    }

    public function packsPremiersSecours()
    {
        return $this->hasMany(PackPremierSecours::class, 'id_pack');
    }

} 
