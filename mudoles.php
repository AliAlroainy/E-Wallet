<?php



include('database.php');  




?>
<!-- Modal -->
<form class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" action="add.php" method="post" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Money</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">name</span>
  <input type="text" class="form-control" placeholder="name" aria-label="name" name="name" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">amount</span>
  <input type="number" class="form-control" placeholder="amount" aria-label="amount" name="amount" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">date</span>
  <input type="date" class="form-control" placeholder="date" aria-label="date" name="date" aria-describedby="basic-addon1">
</div>


      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">add</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
      </div>
    </div>
  </div>
</form>