<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Travel;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travel = new Travel();
        $travel -> name = "Torneo de magic en Málaga, Palacio de congresos y ferias";
        $travel -> location = "Málaga";
        $travel -> description = "El salón de época y colección Retro Málaga, se celebrará los días 27, 28 y 29 de enero de 2023 en el Palacio de Ferias y Congresos de Málaga (FYCMA). 
        Por décimo año consecutivo, los amantes de los vehículos clásicos y de colección del sur del país y en especial de la comunidad andaluza tienen una cita ineludible en el salón retro de Málaga por excelencia, en el que podrás encontrar exposiciones, stands de accesorios, repuestos, regalos, compra-venta de coches y motos clásicas…";
        $travel -> sponsored = true;
        $travel-> professional = true;
        $travel-> price = "20 euros";
        $travel-> organizer = "Manuel Cobos de la Piedra, Industris S.A.";
        $travel->save();
    }
}
