@php
use App\Models\Tickets;

if ( $category != 'All' ) 
    $Tickets = Tickets::where('category_id', $category)->get();
 else
    $Tickets = Tickets::all(); 

@endphp

@if ($Tickets->isEmpty()) <!-- Check if the collection is empty -->
    <div >We Have No Tickets Currently</div>
@else
    @foreach ($Tickets as $ticket)
        <x-ticket :ticket="$ticket" />
    @endforeach
@endif
