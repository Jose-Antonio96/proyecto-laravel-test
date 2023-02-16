<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = new User();
        $user -> name = "Superadmin2";
        $user -> email = "admin@miappcom2";
        $user-> phone_number = 12313012;
        $user-> administrator = true;
        $user-> PostalCode = "123913";
        $user-> Address = "Fran de la chuta número 12";
        $user ->password = "woahsafe2";
        $user->save();
        /*
        User::factory()->create([
        'name' => 'Test User2',
        'email' => 'test2',
        'password' => bcrypt('passtest2')  
        ]);
        */
        /*
        User::factory()->count(50)->create();
        */
    }
}
