<?php 
include('database.php');  

$pname = $_POST['name'];  
$amount = $_POST['amount']; 
$date = $_POST['date'];  


// $sql = "INSERT INTO received ( name, amount ,date ) VALUES ($pname, $amount, $date)";
$sql = "INSERT INTO `received` (`id`, `name`, `amount`, `date`) VALUES (NULL, '$pname', '$amount', '$date');";
if ($con->query($sql) === TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$sql1 = "SELECT amount FROM received ORDER BY id DESC LIMIT 1 ";

if($result = mysqli_query($con, $sql1)){
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);

         $amountRecived =  $row['amount'] ;

     }}

     $sql2 = "SELECT * FROM balance";

if($result1 = mysqli_query($con, $sql2)){
    if(mysqli_num_rows($result1) > 0){
        $row = mysqli_fetch_array($result1);

        $amountRecived1 =  $row['total'] ;

     }}

     $Total =  $amountRecived + $amountRecived1 ;

     $sql3 = "UPDATE balance SET total='$Total' ";
     mysqli_query($con, $sql3);

     header("Location: home.php");

    

$con->close();
  

?>