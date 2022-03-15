

<?php


include( "header.php");

include('database.php');  


?>
<div class="container mt-5">
 <h4 class="mb-4"> Recived money info </h4>
<table class="table table-striped table-hover">

  <tr> 
    <td>id </td>  
    <td> name</td>  
    <td> amount</td> 
    <td> date</td>  
</tr>

<?php


$sql = "SELECT * FROM received";

if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        
            while($row = mysqli_fetch_array($result)){
                echo '  <tr> '.'<td>'. $row['id'] .'</td>'.'<td>'. $row['name'] .'</td>'.'<td>'. $row['amount'] .'</td>'.'<td>'. $row['date'] .'</td>'.'</tr>';
             
            }}}
            else
            echo "not found";


?>


</table>

</div>

<?php

include( "footer.php");

?>