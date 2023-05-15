<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public function reclamation(){
        return $this->hasMany(reclamation::class);
    }
    public function dispositif(){
        return $this->hasMany(dispositif::class);
    }
    public function culture(){
        return $this->belongsToMany(culture::class, 'client_culture');
    }
    public function poste(){
        return $this->belongsToMany(poste::class, 'client_poste');
    }

    protected $fillable=[
        'name','prenom','phone','adresse','MDP','email','date'
    ];
}
