<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Illuminate\Contracts\Auth\Authenticatable;

class Travel extends Model
{
    use HasFactory;

    protected $table = 'travels';

    public function User(){
        return $this->belongsTo(User::class);
        
    }

    public function Tag(){
        return $this->belongsToMany(User::class);
    }

    public function index(Authenticatable $user){
        return $user -> id;
    }
    

}
//Con esto ya se conecta automaticamente con la tabla de la base de datos
//Hace falta luego una función save() para que guarde en la base de datos