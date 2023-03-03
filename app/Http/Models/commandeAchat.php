<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commandeAchat extends Model
{
    use HasFactory;
    protected $fillable = ['fournisseur_id', 'datecom'];

    public function fournisseur()
    {
        return $this->belongsTo(fournisseur::class);
    }
}
