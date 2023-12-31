<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function store(Request $request)
    {
        try {
            $title = $request->input('title');
            $description = $request->input('description');
            $category = $request->input('category');
            $userId = auth()->user()->id;

            // Perform the insert operation using the Ticket model
            Tickets::create([
                'title' => $title,
                'description' => $description,
                'category_id' => $category,
                'status' => "open",
                'Uid' => $userId, 
            ]);
    
            return redirect()->back()->with('success', 'Ticket submitted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while submitting the ticket.');
        }
    }
    //function to update Title
    public function update(Request $request, $id){
        $newValue = $request->input('value');
        $type = $request->input('type');
        $ticket = Tickets::find($id);
        if ($ticket) {
            if($type == "title")
                $ticket->update(['title' => $newValue]);
            if($type == "description")
                $ticket->update(['description' => $newValue]);
            if($type == "category")
                $ticket->update(['category_id' => $newValue]);
            return redirect()->back()->with('success', 'Ticket Updated successfully');
        }
    
        dd("Ticket not found or other error"); // Debugging
            return redirect()->back()->with('error', 'Something Went Wrong');
    }
    public function destroy(Request $req, $id){
        $ticket = Tickets::find($id);
        if ($ticket) {
            $ticket->delete();
            return redirect()->route('home', ['category' => 'All'])->with('success', 'Ticket deleted successfully');
        } else {
            return redirect()->route('home', ['category' => 'All'])->with('error', 'Ticket not found');
        }
    }

}
