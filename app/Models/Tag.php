<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Travel;
use App\Models\User;

class Tag extends Model
{
    use HasFactory;
    
    public function Travel(){
        return $this->belongsToMany(Travel::class);
    }

    public function User(){
        return $this->belongsToMany(User::class);
    }
    

}
