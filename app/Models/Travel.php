<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
    
    public function tags(){
        return $this->belongsToMany(Travel::class);
    }

}
//Con esto ya se conecta automaticamente con la tabla de la base de datos
//Hace falta luego una función save() para que guarde en la base de datos