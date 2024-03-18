<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackPremierSecours extends Model
{

    protected $fillable = ['pack_id', 'premiers_secours_id'];

    protected $table = 'packs_premiers_secours';

    public function pack()
    {
        return $this->belongsTo(Pack::class, 'pack_id');
    }

    public function premiersSecours()
    {
        return $this->belongsTo(PremiersSecours::class);
    }
    
}