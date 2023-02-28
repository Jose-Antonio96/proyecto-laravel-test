<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\User;
use Ramsey\Uuid\Type\Integer;

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

    public static function create(string $name, string $location, string $description, bool $sponsored, string $image, int $starts, int $finishes, bool $professional, string $price, User $user ){

        $newTravel = new Travel();
        $newTravel -> name = $name;
        $newTravel -> location = $location;
        $newTravel -> description = $description;
        $newTravel -> sponsored = $sponsored;
        $newTravel -> image = $image;
        $newTravel -> starts = $starts;
        $newTravel -> finishes = $finishes;
        $newTravel ->professional = $professional;
        $newTravel -> price = $price;
        $newTravel->user()->associate($user);

        $newTravel->save();
    }

}
//Con esto ya se conecta automaticamente con la tabla de la base de datos
//Hace falta luego una función save() para que guarde en la base de datos