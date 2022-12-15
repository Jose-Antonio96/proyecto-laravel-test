<?php

namespace Database\Seeders;
//Encargado de meter datos respecto al bloque de articulos

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Articulo;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articulo = new Articulo();
	    $articulo->nombre = 'Anime';

	    $articulo2 = new Articulo();
	    $articulo2->nombre = 'Ciencia Ficción';

        $articulo3 = new Articulo();
        $articulo3->nombre = 'Humor';
        
        $articulo->save();
        $articulo2->save();
        $articulo3->save();

        Articulo::factory()->count(50)->create();
    }
}
