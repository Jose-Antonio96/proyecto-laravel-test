<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    
        /*
       $admin = new User();
       $admin -> name = "Superadmin";
       $admin ->email = "admin@miappcom";
       $admin ->password = "woahsafe";
       $admin->save();
        
       User::create(['name' => 'Test User',
        'email' => 'test',
        'password' => 'passtest'  
        ]);
        */
        
        
        /*
        $this->call([TravelSeeder::class]);
*/
        $this->call([TagSeeder::class]);

        $this->call([RoleSeeder::class]);

        $this->call([UserSeeder::class]);
        
    }
    
}
