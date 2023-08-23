<div class="fs-3 ms-4">
    Edit your ticket
    <button id="change-button" style="visibility: hidden">Change data</button>
</div>
<div class="container fs-5">
    <p class="d-inline-flex gap-3 ms-5">
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          Edit Title
        </a>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#descriptionEdit" aria-expanded="false" aria-controls="collapseExample">
          Edit Description
        </button>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#categoryEdit" aria-expanded="false" aria-controls="collapseExample">
            Change Category
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
      <div class="collapse " id="categoryEdit">
        <div class="container border py-2 ">
          <label  class="form-label d-block">Change Category</label>
          <div class="btn-group col" role="group">
            @if ($category !== 1)
                <label class="btn btn-custom-outline">
                    <input type="radio" class="category" name="category" id="category1" value="1" checked> Support
                </label>
            @endif
            @if ($category !== 3)
                <label class="btn btn-custom-outline">
                    <input type="radio" class="category" name="category" id="category2" value="3"> Complaint
                </label>
            @endif
            @if ($category !== 2)
                <label class="btn btn-custom-outline">
                    <input type="radio" class="category" name="category" id="category3" value="2"> Feedback
                </label>
            @endif
        </div>

        </div>
    </div>
</div>

<script>

  const change = ()=>{
    var title = document.getElementById('title');
    var description = document.getElementById('description');
    var category = document.getElementsByClassName('category');
    if(title.value !== "" || description.value !== "")
      document.getElementById('change-button').style.visibility = "visible" ; 
    else
      document.getElementById('change-button').style.visibility = "hidden" ; 
  }
</script>