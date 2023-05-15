<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conseil extends Model
{
    use HasFactory;
    public function culture(){
        return $this->belongsToMany(culture::class, 'conseil_culture');
    }
    public function etape(){
        return $this->belongsToMany(etape::class, 'conseil_etape');
    }
}
