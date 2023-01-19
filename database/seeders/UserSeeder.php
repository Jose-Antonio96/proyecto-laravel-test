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
        /*
        $admin = new User();
        $admin -> name = "Superadmin2";
        $admin ->email = "admin@miappcom2";
        $admin ->password = "woahsafe2";
        $admin->save();
        
        User::factory()->create([
        'name' => 'Test User2',
        'email' => 'test2',
        'password' => bcrypt('passtest2')  
        ]);
        */
        User::factory()->count(50)->create();
    }
}
