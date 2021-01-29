<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VehicleServiceTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_save_vehicle()
    {
        $name = '205';
        // Préparer des données
            // Création d'une marque
            // Les paramètres du véhicule
        // Instancier un VehicleService
        // Utiliser la méthode saveVehicle
        // Vérifier la présence du record en bdd
    }

    /** @test */
    public function cant_save_vehicle_without_existing_brand()
    {
    }

    /** @test */
    public function cant_save_vehicle_without_good_params()
    {
        $price = 'lowcost';
    }
}
