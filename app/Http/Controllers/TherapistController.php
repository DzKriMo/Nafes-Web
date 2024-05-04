<?php

namespace App\Http\Controllers;

use App\Models\Therapist;


use Illuminate\Http\Request;

class TherapistController extends Controller
{
    public function register(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:therapists,email',
            'password' => 'required|string|min:6',
            'bio' => 'nullable|string',
            'specialization' => 'nullable|string',
            'contact_info' => 'required|string',
            // Add more validation rules as needed
        ]);

        // Create new therapist record
        $therapist = Therapist::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'bio' => $validatedData['bio'],
            'specialization' => $validatedData['specialization'],
            'contact_info' => $validatedData['contact_info'],
            // Add more fields as needed
        ]);

        return response()->json(['therapist' => $therapist], 201);
    }

    public function updateProfile(Request $request, $id)
    {
        // Find therapist by ID
        $therapist = Therapist::findOrFail($id);

        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'string',
            'email' => 'email|unique:therapists,email,' . $therapist->id,
            'bio' => 'nullable|string',
            'specialization' => 'nullable|string',
            'contact_info' => 'nullable|string', // Adjust validation rules as needed

            // Add more validation rules as needed
        ]);

        // Update therapist profile
        $therapist->update($validatedData);

        return response()->json(['therapist' => $therapist], 200);
    }

    public function delete(Request $request, $id)
    {
        // Find therapist by ID
        $therapist = Therapist::findOrFail($id);

        // Delete therapist
        $therapist->delete();

        return response()->json(['message' => 'Therapist deleted successfully'], 200);
    }
    public function search(Request $request)
    {
        // Retrieve search parameters from request
        $name = $request->input('name');
        $specialization = $request->input('specialization');

        // Build query to search for therapists
        $query = Therapist::query();

        if ($specialization) {
            $query->where('specialization', $specialization);
        }



        // Execute the query
        $therapists = $query->get();

        return response()->json(['therapists' => $therapists], 200);
    }


    public function show($id)
    {
        $therapist = Therapist::findOrFail($id);
        return response()->json(['therapist' => $therapist], 200);
    }

    public function updatePassword(Request $request, $id)
    {
        $therapist = Therapist::findOrFail($id);

        // Validate incoming request data
        $validatedData = $request->validate([
            'password' => 'required|string|min:6',
        ]);

        // Update therapist's password
        $therapist->update([
            'password' => bcrypt($validatedData['password']),
        ]);

        return response()->json(['message' => 'Password updated successfully'], 200);
    }
}