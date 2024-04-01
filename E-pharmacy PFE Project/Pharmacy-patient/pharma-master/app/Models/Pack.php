<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'description', 'prix', 'qte_en_stock','image_path'];

    public function packsProduits()
    {
        return $this->hasMany(PackProduit::class, 'pack_id');
    }


    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'packs_produits','pack_id', 'produits_id')->withPivot('qte_produit');
    }
}
