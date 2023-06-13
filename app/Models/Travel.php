<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\User;
use App\Models\Tag;

class Travel extends Model
{
    use HasFactory;

    protected $table = 'travels';

    public function User(){
        return $this->belongsToMany(User::class);

    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
}
//Con esto ya se conecta automaticamente con la tabla de la base de datos
//Hace falta luego una funciÃ³n save() para que guarde en la base de datos