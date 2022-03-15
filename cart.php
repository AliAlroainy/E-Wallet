
<?php


include( "header.php");

include('database.php');  




?>

    <div class="container mt-5">

    <?php
  //echo $_POST['idp'];
if(isset($_POST['addToCart'])){
  if(isset($_SESSION['cart'])){
    $products_ids = array_column($_SESSION['cart'],"productid");
    if(!in_array($_POST['idp'],$products_ids)){
      $count = count ($_SESSION['cart']['productid']);
      $array_item = array('productid'=> $_POST['idp']);
      $_SESSION['cart'][$count] = $array_item;
    }
foreach($products_ids as $id):
echo $id."   ,";
endforeach;

  }else{
    $array_item = array('productid'=> $_POST['idp']);
    $_SESSION['cart'][0] = $array_item;
    print_r($_SESSION['cart'][0]);
    echo  isset($_SESSION['cart'])."    ";
    echo "dsf";
  }

}


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
