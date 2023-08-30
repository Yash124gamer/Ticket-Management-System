@extends('layouts.app')

@section('content')
<div style="background-color: #e8fdf1 ">
        <div class="row mx-5 d-flex justify-content-between mb-5">
            <div class="col-md-4" style="margin-top: 8%">
                <p class="text-wrap fs-1 fw-bold">Handling customer complaints is easy now.</p>
                <p class="text-wrap fs-5 fw-medium">We will help you receive, respond to, and resolve customer grievances with simple solutions, and leaves you with more time for tasks that matter.</p>
                <a href="{{ route('home', ['category' => 'All']) }}" class="btn btn-success btn-lg">Get Started</a>                         {{--   User will be Directed to the Home page on click of Get Started button if the user is not logged in then the user will be directed to Login page to login  --}}
            </div>
            <img class="col-md-5" src="complaint-management-handing.webp" alt="" width="584" height="490">            
        </div>
</div>
<div >
    <div class="row mx-5 d-flex justify-content-center mt-5">
        <img class="col-md-3 border me-5" src="desk-customer-connect.webp" alt="" height="420" style="box-shadow: 10px 10px #ecefed;">            
        <div class="col-md-4" style="margin-top: 3%">
            <p class="text-wrap fs-1 fw-bold">You need all the complaints in one place.</p>
            <p class="text-wrap fs-5 fw-medium">Resolving customer complaints requires a system with multichannel capabilities.We collect all support tickets from different channels and organizes them in one tab to help agents reply to all of them from one place</p>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row mx-5 d-flex justify-content-center mt-5">
        <span class="fs-2 text-wrap fw-bold col-md-6 " style="width: auto,margin:auto">You need software that gives agents all the context they need</span>
        <p class="text-wrap fs-5 fw-medium d-flex justify-content-center">Support agents need a streamlined view of all this data to maximize efficiency.</p>
        <p class="text-wrap fs-5 fw-medium d-flex justify-content-center"> We will do that through our Agent Producitvity toolkit.</p>
    </div>
</div>
@endsection