<div class="card my-3 ticket-card">
    <div class="card-header d-flex justify-content-between">
        <h4>{{ $ticket->title }}</h4>
        <p class="fst-italic" style="color: teal">{{ $ticket->status }}</p>
    </div>
    <div class="card-body">
        @if($ticket->category_id == 1)
            <h6 class="card-title border border-2 border-success rounded-3 d-inline px-2 py-1 border-opacity-75">
                Support <img src="wrench.svg" alt="">
            </h6>
        @elseif($ticket->category_id == 2)
            <h6 class="card-title border border-2 border-primary rounded-3 d-inline px-2 py-1 border-opacity-75">
                Feedback <img src="message-square-plus.svg" alt="">
            </h6>
        @else
            <h6 class="card-title border border-2 border-danger rounded-3 d-inline px-2 py-1 border-opacity-75">
                Complaint <img src="badge-alert.svg" alt="">
            </h6>
        @endif
      <p class="card-text mt-3">{{ $ticket->description }}</p>
    </div>
</div>