<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function commandes()
    {
        return $this->belongsToMany(Commande::class, 'produits_commandes')->withPivot('quantite');
    }

    public function packs()
    {
        return $this->belongsToMany(Pack::class, 'packs_produits');
    }
}
