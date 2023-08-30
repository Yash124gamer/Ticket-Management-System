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
<div class="ms-4 ps-4 fs-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
      </ol>
</div>
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

