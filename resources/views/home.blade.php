@extends('layouts.app')

@section('content')
@php
    if ($paramValue == 1)  
        $value = "Support Tickets";
    elseif ($paramValue == 2)
        $value = "Feedback Tickets";
    elseif ($paramValue == 3) 
        $value = "Complaint Tickets";
    else 
        $value = "All Tickets";

@endphp
<div class="container border border-secondary rounded " style="min-height: 60rem">
    <x-statusBar :value="$value" />
    <div class="container">
        @if(auth()->user()->role === 'user')
            <x-main />
        @else
        <x-admin-main :category="$paramValue" />        
        @endif
    </div>
    
</div>
@endsection

