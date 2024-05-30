<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $carData = [      
            [
                "name" => "Audi A3",
                "price" => 75,
                "category" => "Sedan",
                "seats" => 4,
                "luggage" => 2,
                "fuelType" => "Gas"
            ],
            [
                "name" => "BMW X5",
                "price" => 100,
                "category" => "SUV",
                "seats" => 4,
                "luggage" => 2,
                "fuelType" => "P-Gas"
            ],
            [
                "name" => "Mercedes-Benz",
                "price" => 90,
                "category" => "Merecedes",
                "seats" => 6,
                "luggage" => 4,
                "fuelType" => "V-Gas"
            ],
            // Add more vehicles as needed
            [
                "name" => "Audi A3",
                "price" => 75,
                "category" => "Sedan",
                "seats" => 4,
                "luggage" => 2,
                "fuelType" => "Gas"
            ],
            [
                "name" => "BMW X5",
                "price" => 100,
                "category" => "SUV",
                "seats" => 4,
                "luggage" => 2,
                "fuelType" => "P-Gas"
            ],
            [
                "name" => "Mercedes-Benz",
                "price" => 90,
                "category" => "Merecedes",
                "seats" => 6,
                "luggage" => 4,
                "fuelType" => "V-Gas"
            ],
        ];

        // Pass carData to the view
        return view('vehicles')->with('carData', $carData);
    }
}
