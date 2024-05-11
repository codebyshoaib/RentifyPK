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
                "imageSrc" => "./assets/vehicles/vehicle-01.jpg",
                //"rating" => $this->generateRatingStars(2),
                "price" => 75,
                "category" => "Sedan",
                "seats" => 4,
                "luggage" => 2,
                "fuelType" => "Gas"
            ],
            [
                "name" => "BMW X5",
                "imageSrc" => "./assets/vehicles/vehicle-02.jpg",
              //  "rating" => $this->generateRatingStars(5),
                "price" => 100,
                "category" => "SUV",
                "seats" => 4,
                "luggage" => 2,
                "fuelType" => "P-Gas"
            ],
            [
                "name" => "Mercedes-Benz",
                "imageSrc" => "./assets/vehicles/vehicle-03.jpg",
               // "rating" => $this->generateRatingStars(4),
                "price" => 90,
                "category" => "Merecedes",
                "seats" => 6,
                "luggage" => 4,
                "fuelType" => "V-Gas"
            ]
        ];

        return response()->json($carData);
    }

    // // Function to generate rating stars
    // private function generateRatingStars($rating)
    // {
    //     $stars = '';
    //     for ($i = 0; $i < $rating; $i++) {
    //         $stars .= '
    //             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
    //                 class="bi bi-star-fill" viewBox="0 0 16 16">
    //                 <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
    //             </svg>
    //         ';
    //     }
    //     return $stars;
    // }
}
