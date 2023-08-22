@extends('layouts.app')

@section('content')
<div class="container border border-secondary rounded " style="min-height: 60rem">
    <x-statusBar />
    <div class="container">
        @if(auth()->user()->role === 'user')
            <x-main />
        @else
            <x-admin-main />
        @endif
    </div>
    
</div>
@endsection
