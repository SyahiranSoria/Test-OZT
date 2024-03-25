<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function fetchDataAndProcess(Request $request)
    {
        
        $accessKey = config('api.external_service.access_key');
        $count = 10;
        $orientation = 'squarish';
        $query = 'cat';

        
        $response = Http::get('https://api.unsplash.com/photos/random', [
            'client_id' => $accessKey,
            'count' => $count,
            'orientation' => $orientation,
            'query' => $query
        ]);

        // Check if the request was successful
        if ($response->successful()) {
            
            $data = $response->json();
            
            // Check if data is empty
            if(empty($data)) {
                // If data is empty, return a message as no info
                return view('api')->with('message', 'No information available.');
            }

            // Pass the data to the view and return the view
            return view('api')->with('photos', $data);
        } else {
            return response()->json(['error' => 'API request failed'], $response->status());
        }
    }
}
