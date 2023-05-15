<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    public function culture(){
        return $this->belongsToMany(culture::class, 'culture_tache');
    }
    public function etape(){
        return $this->belongsToMany(etape::class, 'etape_tache');
    }
}
