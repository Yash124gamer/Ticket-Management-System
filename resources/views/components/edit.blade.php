@php
  
  use App\Models\Tickets;
  $ticket = Tickets::find($ticketId);
  
@endphp

<div class="fs-3 ms-4 mb-3">
    Edit your ticket
</div>
<div class="container fs-5">
    <p class="d-inline-flex gap-3 ms-5">
        <a class="btn btn-primary" data-bs-toggle="collapse" id="titLabel" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" onclick=disableText(event)>
          Edit Title
        </a>
        <button class="btn btn-primary" id="desLabel" type="button" data-bs-toggle="collapse" data-bs-target="#descriptionEdit" aria-expanded="false" aria-controls="collapseExample" onclick=disableText(event)>
          Edit Description
        </button>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#categoryEdit" aria-expanded="false" aria-controls="collapseExample" onclick=disable()>
            Change Category
        </button>
        <button class="btn btn-danger" type="button"data-bs-toggle="modal" data-bs-target="#deleteModal">
          Delete Ticket
      </button>
    </p>
      <div class="collapse mb-2" id="collapseExample">
        <div class="container border py-2">
          <label  class="form-label">Title</label>
            <input type="text" id="title" class="form-control" onkeyup=change()>
        </div>
      </div>
      <div class="collapse mb-2" id="descriptionEdit">
        <div class="container border py-2">
          <label  class="form-label">Description</label>
          <input type="text" class="form-control" id="description" onkeyup=change()>
        </div>
      </div>
      <div class="collapse mb-2" id="categoryEdit">
        <div class="container border py-2 ">
          <label  class="form-label d-block">Change Category</label>
          <div class="btn-group col" role="group">
            @if ($category !== 1)
                <label class="btn btn-custom-outline">
                    <input type="radio" class="category" name="category" id="category1" value="1" onclick=change() > Support
                </label>
            @endif
            @if ($category !== 3)
                <label class="btn btn-custom-outline">
                    <input type="radio" class="category" name="category" id="category2" value="3" onclick=change()> Complaint
                </label>
            @endif
            @if ($category !== 2)
                <label class="btn btn-custom-outline">
                    <input type="radio" class="category" name="category" id="category3" value="2" onclick=change()> Feedback
                </label>
            @endif
        </div>
        
        </div>
    </div>
    <div class="d-flex justify-content-center">
      <button id="change-button" class="btn btn-success" style="visibility: hidden" data-bs-toggle="modal" data-bs-target="#exampleModal">Change data</button>
    </div>
</div>


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Do You want to Change Data ?</h1>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" onclick=saveData()>Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Do You want to Delete this Ticket ?</h1>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
          <form action="{{ route('delete.ticket', $ticket->id) }}" method="GET">
            @csrf
            <button type="submit" class="btn btn-danger" >Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<script>

  const title = document.getElementById('title');
  const description = document.getElementById('description');
  const category = document.getElementsByClassName('category');
  var catValue = 0;
  const url = "{{ route('update.ticket', $ticket->id) }}";

  const change = ()=>{
    let isChecked = false;
    for (const checkbox of category) {
      if (checkbox.checked) {
        catValue = checkbox.value;
        isChecked = true;
        break;
      }
      else
        catValue = 0;
    }
    if(title.value !== "" || description.value !== "" || isChecked)
      document.getElementById('change-button').style.visibility = "visible" ; 
    else
      document.getElementById('change-button').style.visibility = "hidden" ; 
  }

  const disable = ()=>{
    for (const checkbox of category) {
        checkbox.checked = false;
    }
    change();
  }
  const disableText = (e)=>{
    if(e.target.id === "titLabel")
      title.value = "";
    else
      description.value = "";
    change();
  }
  const saveData = async()=>{

    if(title.value !== "") 
      await update(title.value , 'title');
    if(description.value !== "")
      await update(description.value , 'description');
    if(catValue != 0)
      await update(catValue , 'category');
    location.reload();
  }

  function update(value , type) {
    fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ value , type })
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
          } 
           else 
              console.error("Title update failed");
        })
        .catch(error => {
            console.error("An error occurred", error);
        });
  }

</script>