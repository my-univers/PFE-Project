<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'description', 'prix', 'qte_en_stock','image_path'];

    public function packsPremiersSecours()
    {
        return $this->hasMany(PackPremierSecours::class, 'id_pack');
    }

    public function premiersSecours()
    {
        return $this->belongsToMany(PremiersSecours::class, 'packs_premiers_secours');
    }

} 
