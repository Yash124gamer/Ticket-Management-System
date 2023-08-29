<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function store(Request $request)
    {
        try {
            $response = $request->input('response');
            $ticketId = $request->input('ticketId');
            $ticket = \App\Models\Tickets::find($ticketId);
            // Perform the insert operation using the Ticket model
            Response::create([
                'response' => $response,
                'ticket_id' => $ticketId
            ]);
            $ticket->update(['status' => 'close']);
    
            return redirect()->back()->with('success', 'Response Added successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while Adding Response.');
        }
    }
}
