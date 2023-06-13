<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Travel;
use App\Models\User;

class Tag extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'tags'
    ];

    public function User(){
        return $this->belongsToMany(User::class);
    }
    
    

    

    public function travels()
    {
        return $this->belongsToMany(Travel::class);
    }

    
}
