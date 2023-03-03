<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class produit extends Model
{
    protected $fillable = [
        'type_produits_id',
        'libelle',
        'prix',
        'image',
        'description',
        'qtStock'
    ];
    use HasFactory;
    public function typeProduit()
    {
        return $this->belongsToMany(typeProduit::class);
    }
    public function commandeVente()
    {
        return $this->belongsTo(commandeVente::class);
    }
    public function commandeAchat()
    {
        return $this->belongsTo(commandeAchat::class);
    }
}
