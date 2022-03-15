
<?php


include( "header.php");

include('database.php');  




?>

    <div class="container mt-5">

    <?php

    if(!empty($_POST["idp"])){

    $idd = $_POST['idp'];

    $sql = "SELECT * FROM prodcut WHERE id=`$idd`  ";

    if($result = mysqli_query($con, $sql)){
      if(mysqli_num_rows($result) > 0){
        
            while($row = mysqli_fetch_array($result)){
                echo '<div class="col">
                <div class="card">
                  <div class="card-body">'.
                '  <h5 class="card-title">'. $row['name'] .'</h5>'.
                '<p class="card-text">'. $row['price'] .'</p>'.
              '</div>
              </div>
            </div>';
            }}}}
            else
            echo "no prudacts add";

?>

<br/>
<div class="card mt-5 p-3 ">

totall :
 <?php  ?>

    <input type="submit"  class="btn btn-primary" value="buy">

</div>



<?php

include( "footer.php");

?>
