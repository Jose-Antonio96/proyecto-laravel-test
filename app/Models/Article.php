<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',

    ];
    protected $casts = [
        'created_at' => 'datetime',
        //Esto lo que hace es cambiar la variable a otra, en este caso a un datetime para que la base de datos pueda usarlo
    ];

}
