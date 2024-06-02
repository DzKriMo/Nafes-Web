<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function register(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:clients,email',
            'password' => 'required|string|min:6',
            'contact_info' => 'nullable|string',
            'payment_info' => 'nullable|string'
            // Add more validation rules as needed
        ]);

        // Create new client record
        $client = client::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']), // Hash the password
            'contact_info' => $validatedData['contact_info'],
            'payment_info' => $validatedData['payment_info']
            // Add more fields as needed
        ]);

        return response()->json(['client' => $client], 201);
    }
}
