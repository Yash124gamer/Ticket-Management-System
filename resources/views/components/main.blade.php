@php
use App\Models\Tickets;

$userId = auth()->user()->id;
$userTickets = Tickets::where('Uid', $userId)->get(); // Corrected column name
@endphp

@if ($userTickets->isEmpty()) <!-- Check if the collection is empty -->
    <div >You Have No Tickets Currently</div>
@else
    <div>Tickets</div>
@endif
