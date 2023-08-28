@php
    use App\Models\Response;
    
    $response = Response::where('ticket_id', $id)->get();
@endphp

@if ($response->count() > 0)
    <div class="container mb-5">
        <div class="card ">
            <div class="card-footer fst-italic lh-base fs-5">
                {{ $response[0]->response }}
            </div>
            <div class="card-body d-flex py-0 fs-5 fst-italic justify-content-between align-items-center">
                -admin  
                <span class="fs-6">Uploaded On-: {{ $response[0]->created_at->format('l, M d') }}</span>
            </div>
        </div>
    </div>
@endif
