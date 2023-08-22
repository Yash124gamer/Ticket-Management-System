@extends('layouts.app')

@php
use App\Models\Tickets;
use App\Models\User;

    $ticket_id = request()->query('id');    
    $ticket = Tickets::find($ticket_id);
    $adminPresent = false;
    if(auth()->user()->role == "admin"){
        $adminPresent = true;
        $user = User::find($ticket->Uid);
    }
@endphp

@section('content')
    <div class="container mb-5">
        <div class="card" style="border-left:solid 8px green">
            <div class="card-header fs-3 fst-italic">
                {{ $ticket->title }}
            </div>
            <div class="card-body fs-5">
                {{ $ticket->description }}
            </div>
            <div class="card-footer d-flex justify-content-between">
                @if ($adminPresent)
                    <div data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer">Uploaded By-</div>
                @endif
                <div style="color:blue">Posted On -: {{ $ticket->created_at }}</div>
            </div>
        </div>
    </div>
    @if ($adminPresent)
        <x-response />
    @else
        <x-edit />
    @endif
@endsection

@if ($adminPresent)
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-3" id="exampleModalLabel">User details</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body fs-5 fst-italic">
            <p>Name -: {{ $user->name }}</p>
            <p>Email -: {{ $user->email }}</p>
            <p>Created At -: {{ $user->created_at }}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-success" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
@endif
