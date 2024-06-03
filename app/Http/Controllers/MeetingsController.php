<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\meeting;

class MeetingsController extends Controller
{
    public function scheduleAppointment(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'therapist_id' => 'required|exists:therapists,id',
<<<<<<< HEAD
            'client_id' => 'required|exists:clients,id',
=======
            'client_id' => 'required',
>>>>>>> 29abd5a4e331204e6883eb18cc27968263fcfcaa
            'client_name' => 'required|string',
            'client_email' => 'required|email',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'duration' => 'required|integer|min:1',
            'meeting_type' => 'required|string',
            'status' => 'required|string',
            'note' => 'nullable|string',
        ]);

        // Create new meeting record
        $meeting = meeting::create($validatedData);

        return response()->json(['meeting' => $meeting], 201);
    }

    public function show($id)
    {
        $meeting = Meeting::findOrFail($id);
        return response()->json(['meeting' => $meeting], 200);
    }

    public function update(Request $request, $id)
    {
        $meeting = Meeting::findOrFail($id);
        $meeting->update($request->all());
        return response()->json(['message' => 'Meeting updated successfully', 'meeting' => $meeting], 200);
    }

    public function ss($id)
    {
        $meeting = Meeting::findOrFail($id);
        $meeting->status = 'Cancelled';
        $meeting->save();
        return response()->json(['message' => 'Meeting cancelled successfully', 'meeting' => $meeting], 200);
    }


    public function meetingsForTherapist($therapistId)
    {
        $meetings = Meeting::where('therapist_id', $therapistId)->get();
        return response()->json(['meetings' => $meetings], 200);
    }

    public function meetingsForClient($clientId)
    {
        $meetings = Meeting::where('client_id', $clientId)->get();
        return response()->json(['meetings' => $meetings], 200);
    }

    //Implement a function to retrieve all meetings in the system.

    public function index()
    {
        $meetings = Meeting::all();
        return response()->json(['meetings' => $meetings], 200);
    }

    public function destroy($id)
    {
        $meeting = Meeting::findOrFail($id);
        $meeting->delete();
        return response()->json(['message' => 'Meeting deleted successfully'], 200);
    }
<<<<<<< HEAD
}
=======

    public function checkAvailability(Request $request)
{
    $request->validate([
        'therapist_id' => 'required|exists:therapists,id',
        'date' => 'required|date_format:Y-m-d',
    ]);

    $therapistId = $request->input('therapist_id');
    $date = $request->input('date');


    $meetings = Meeting::where('therapist_id', $therapistId)
        ->whereDate('start_time', $date)
        ->get();

    // available time slots
    $availableTimeSlots = ['08:00', '09:00', '10:00', '11:00', '13:00', '14:00', '15:00', '16:00'];

    // n7iw the  booked slots
    foreach ($meetings as $meeting) {
        $bookedTimeSlot  = date('H:i', strtotime($meeting->start_time));
        $endTime = date('H:i', strtotime($meeting->end_time));
        $index = array_search($bookedTimeSlot, $availableTimeSlots);
        if ($index !== false) {
            unset($availableTimeSlots[$index]);
        }
    }
     
    return response()->json(['available_time_slots' => array_values($availableTimeSlots)], 200);
}

}
>>>>>>> 29abd5a4e331204e6883eb18cc27968263fcfcaa
