<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\SaveUserRequest;
use App\Models\Role;
use Illuminate\Auth\Events\Registered;

class RegisteredUserController extends Controller
{
    public function store(SaveUserRequest $request){
        /*
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]); 
       */
      $imageName = time().'.'.$request->image->extension();

      // Public Folder
      $request->image->move(public_path('images/'), $imageName);

    $account = new User;
    $account -> name = $request->name;
    $account -> email = $request->email;
    $account -> password = $request->password;
    $account -> image = $imageName;
    /*
    $role = Role::where('name', 'user')->first();
    $account->role_id = $role->id;
    */
    $account -> save();

        /*
        User::create($request->validated());
        */
        /*
        Auth::login($user);
        */
        return to_route('login')->with('status', 'Cuenta creada con éxito');
    }
}

