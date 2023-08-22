@php
use App\Models\Tickets;

$userId = auth()->user()->id;
$Tickets = Tickets::where('Uid', $userId)->get(); // Corrected column name
@endphp

@if ($Tickets->isEmpty()) <!-- Check if the collection is empty -->
    <div >You Have No Tickets Currently</div>
@else
    @foreach ($Tickets as $ticket)
        <x-ticket :ticket="$ticket" />
    @endforeach
@endif
