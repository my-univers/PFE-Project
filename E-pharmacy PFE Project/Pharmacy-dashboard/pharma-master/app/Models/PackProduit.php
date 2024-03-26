<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackProduit extends Model
{
    use HasFactory;

    protected $fillable = ['pack_id', 'produits_id', 'qte_produit'];

    protected $table = 'packs_produits';

    public function packs()
    {
        return $this->belongsTo(Pack::class, 'pack_id');
    }

    public function produits()
    {
        return $this->belongsTo(Produit::class, 'produits_id');
    }

}
