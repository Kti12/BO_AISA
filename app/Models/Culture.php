<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    use HasFactory;
    public function marketplace(){
        return $this->belongsTo(marketplace::class);
    }
    public function client(){
        return $this->belongsToMany(client::class, 'client_culture');
    }
    public function dispositif(){
        return $this->belongsToMany(dispositif::class, 'dispositif_culture');
    }
    public function conseil(){
        return $this->belongsToMany(conseil::class, 'conseil_culture');
    }
    public function tache(){
        return $this->belongsToMany(tache::class, 'culture_tache');
    }
    public function etape(){
        return $this->belongsToMany(etape::class, 'culture_etape');
    }
}
