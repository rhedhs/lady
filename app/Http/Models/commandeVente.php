<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commandeVente extends Model
{
    use HasFactory;
    protected $fillable = ['clients_id', 'datecom'];

    public function clients(){
        return $this->belongsTo(Client::class);
    }
}
