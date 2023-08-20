@extends('layouts.app')

@section('content')
<div style="background-color: #e8fdf1 ">
        <div class="row mx-5 d-flex justify-content-between mb-3">
            <div class="col-md-4" style="margin-top: 8%">
                <p class="text-wrap fs-1 fw-bold">Handling customer complaints is easy now.</p>
                <p class="text-wrap fw-medium">We will help you receive, respond to, and resolve customer grievances with simple solutions, and leaves you with more time for tasks that matter.</p>
                <button type="button" class="btn btn-success">Get Started</button>
            </div>
            <img class="col-md-5" src="complaint-management-handing.webp" alt="" width="584" height="450">            
        </div>
</div>
<div >
    <div class="row mx-5 d-flex justify-content-center">
        <img class="col-md-5" src="desk-customer-connect.webp" alt="" width="484" height="560">            
        <div class="col-md-4" style="margin-top: 8%">
            <p class="text-wrap fs-1 fw-bold">You need all the complaints in one place.</p>
            <p class="text-wrap fs-5 fw-medium">Resolving customer complaints requires a system with multichannel capabilities.We collect all support tickets from different channels and organizes them in one tab to help agents reply to all of them from one place</p>
        </div>
    </div>
</div>
@endsection