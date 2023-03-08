<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag();
        $tag -> tags = "Concierto";
        $tag -> save();

        $tag = new Tag();
        $tag -> tags = "Metal";
        $tag -> save();

        $tag = new Tag();
        $tag -> tags = "Torneo";
        $tag -> save();

        $tag = new Tag();
        $tag -> tags = "Cartas";
        $tag -> save();

        $tag = new Tag();
        $tag -> tags = "Música";
        $tag -> save();

    }
}
