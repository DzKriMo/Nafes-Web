<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Therapist;

class Matching extends Controller
{
    public function receiveRequest()
    {
        // Fetch data from the database
        $therapists = Therapist::all();

        $responseData = [];

        foreach ($therapists as $therapist) {
            // Append therapist data to the response array
            $responseData[] = [
                $therapist->id,
                
                $therapist->features, 
            ];
        }

        // Convert the response array to JSON
        $jsonResponse = json_encode($responseData);

        // Send the JSON response back to the Python API
        return $jsonResponse;
    }
}
