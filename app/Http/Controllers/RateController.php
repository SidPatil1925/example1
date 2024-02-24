<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RateController extends Controller
{
    public function startSession(Request $request)
{
    $ip = $request->ip();

        if (session('active_ip') !== $ip) {
            // Return the view for another session in progress
            return view('prompt');
        }

        // Your API logic here

        // Update the session with the current IP
        session(['active_ip' => $ip]);

        return response()->json(['message' => 'Success']);
}

   // Add this method to your controller
public function closePreviousSession(Request $request)
{
    // Add any additional validation or security checks if needed

    // Clear the session data for the previous session
    session()->forget('active_ip');

    return response()->json(['message' => 'Previous session closed successfully']);
}

}
