
<?php

include( "header.php");
include('database.php');  


?>

    <div class="container">

    <div class="row row-cols-1 m-auto w-50 mt-5 bg-light  p-5 card"  > 

    <div class="h4 text-primary">  Total Balance : </div>
    <div class="h3 text-secondary">
    <?php


$sql = "SELECT * FROM balance";

if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);

         echo  $row['total'] ;

     }}
        ?>
    $ </div>
   

    </div>

</div>




<?php

include( "footer.php");

?>