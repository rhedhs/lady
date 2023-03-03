<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'email', 'adresse'];
    public function client()
    {
        return $this->belongsTo(client::class);
    }
    public function produit()
    {
        return $this->belongsTo(produit::class);
    }
    public function commande_ventes()
    {
        return $this->hasMany(commandeVente::class);
    }

}
