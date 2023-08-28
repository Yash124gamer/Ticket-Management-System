<div class="container">
    <a class="text-decoration-none text-reset fs-3 fw-bold" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Add Response
        <img src="plus-circle.svg"  style="transform: translateY(-2px)">
    </a>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
          <form action="{{ route('add.response') }}" method="post">
            @csrf
            <textarea class="form-control" id="message-text" name="response" required></textarea>
            <input type="text" value={{ $id }} hidden name="ticketId">
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </div>
          </form>
        </div>
    </div>
</div>