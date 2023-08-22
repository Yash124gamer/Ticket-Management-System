<nav class="navbar navbar-expand-lg bg-body-tertiary py-3 border-bottom border-success border-3">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item fs-3">
            All Tickets
          </li>
        </ul>
            <li class="nav-item d-flex align-items-center border border-secondary border-opacity-25 p-1 me-4 rounded-1">
                <a class="nav-link fs-5 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer;">
                    <img src="plus-square.svg" alt=""><span class="ms-2">New</span>
                </a>
            </li>
                <img src="bell.svg" class="me-4" alt="">
      </div>
    </div>
  </nav>

  <!-- Modal for making tickets-->
<div class="modal fade modal-lg " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel fs-5 ">Raise a Ticket</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('submit.ticket') }}" method="post">
            @csrf
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label fs-5">Title:</label>
                    <input type="text" class="form-control" name="title" id="recipient-name" required>
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label fs-5">Description:</label>
                    <textarea class="form-control" id="message-text" name="description" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="col-form-label fs-5 fw-bold">Category:</label>
                    <div class="btn-group " role="group">
                        <label class="btn btn-custom-outline">
                            <input type="radio" name="category" id="category1" value="1" checked> Support
                        </label>
                        <label class="btn btn-custom-outline">
                            <input type="radio" name="category" id="category2" value="3"> Complaint
                        </label>
                        <label class="btn btn-custom-outline">
                            <input type="radio" name="category" id="category3" value="2"> Feedback
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>