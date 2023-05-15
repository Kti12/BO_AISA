<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etape extends Model
{
    use HasFactory;
    public function conseil(){
        return $this->belongsToMany(conseil::class, 'conseil_etape');
    }
    public function tache(){
        return $this->belongsToMany(tache::class, 'etape_tache');
    }
    public function culture(){
        return $this->belongsToMany(culture::class, 'culture_etape');
    }
}
