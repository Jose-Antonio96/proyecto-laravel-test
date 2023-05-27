<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Travel;
use App\Models\Tag;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasRoles;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     public function setPasswordAttribute($value)
     {
         if($value != ""){
             $this->attributes['password'] = bcrypt($value);
         }
     }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token', //Identifica la sesion
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        //Esto lo que hace es cambiar la variable a otra, en este caso a un datetime para que la base de datos pueda usarlo
    ];
    
    public function Tag(){
        return $this->belongsToMany(Tag::class);

    }
    
    public function Travel(){
        return $this->hasMany(Travel::class);
    }

    public function addTravel(Travel $travel){
        return $this->add($travel->id);
    }

    
}
