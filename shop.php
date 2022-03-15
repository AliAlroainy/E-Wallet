
<?php


include( "header.php");

include('database.php');  




?>

    <div class="container mt-5">

    

    <div class="row row-cols-1 row-cols-md-2 g-4">

  
  <?php


$sql = "SELECT * FROM prodcut";

if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        
            while($row = mysqli_fetch_array($result)){
              $id =$row['id'] ;
                echo '<div class="col">
                <div class="card">
                  <div class="card-body">'.
                '  <h5 class="card-title">'. $row['name'] .'</h5>'.
                '<p class="card-text">'. $row['price'] .'</p>'. 
                '<input type="hidden" name="idp" form="pform" value="' .  htmlspecialchars($id) .'"  />'.
                '<button type="submit" form="pform" class="btn btn-primary">add</button>'.
              '</div>
              </div>
            </div>';
            }}}
            else
            echo "not found";


?>

<form action="cart.php" name="pform" method="post" ></form>



</div>


</div>


<?php

include( "footer.php");

?>