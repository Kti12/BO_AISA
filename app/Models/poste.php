<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poste extends Model
{
    use HasFactory;
    public function client(){
        return $this->belongsToMany(client::class, 'client_poste');
    }
}
