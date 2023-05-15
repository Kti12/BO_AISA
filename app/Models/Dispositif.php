<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositif extends Model
{
    use HasFactory;
    public function client(){
        return $this->belongsTo(client::class);
    }
    public function reclamation(){
        return $this->hasMany(reclamation::class);
    }
    public function culture(){
        return $this->belongsToMany(culture::class, 'dispositif_culture');
    }
}
