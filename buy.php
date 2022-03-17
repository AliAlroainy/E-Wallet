<?php

include('database.php');  

$sql = "SELECT * FROM tot";

if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);

        $t =  $row['total'] ;

     }}

$sql2 = "SELECT * FROM balance";

if($result1 = mysqli_query($con, $sql2)){
    if(mysqli_num_rows($result1) > 0){
        $row = mysqli_fetch_array($result1);

        $amountRecived1 =  $row['total'] ;

     }}

     $Total =  $amountRecived1 - $t ;

     $sql3 = "UPDATE balance SET total='$Total' ";
     mysqli_query($con, $sql3);

     header("Location: home.php");


?>