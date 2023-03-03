<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeProduit extends Model
{
    protected $fillable = ['libelle'];
    use HasFactory;
    public function produit()
    {
        return $this->belongsToMany(produit::class);
    }
}
