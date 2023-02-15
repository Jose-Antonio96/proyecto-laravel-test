<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function travels(){
        return $this->belongsToMany(Travel::class);
    }

    public function users(){
        return $this->belongsToMany(user::class);
    }

}
