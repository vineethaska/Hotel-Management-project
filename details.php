<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$con = mysqli_connect('localhost:3306','root','vineeth@aska','swagath');

if ($con->connect_error){
  die("connection error :".$con->connect_error);
}

            $sql="select * from room1";

$result=mysqli_query($con, $sql);
if(!$result){
    echo "Details are empty";
}
else{
    ?>
<table border="2">
    <tr>
        <th>Image</th>
        <th>firstname</th>
        <th>lastname</th>
    <th>mobileno</th>
    <th>email</th>
    <th>date</th>
    <th>adults</th>
    <th>childs</th>
    </tr>
    


     <?php
     
         if(mysqli_num_rows($result)){
             while($row= mysqli_fetch_assoc($result)){
                 echo "<tr>";
                 echo "<td><img src='".$row["image"]."' width='100px' height='100px'/></td>";
                 echo "<td>".$row["firstname"]."</td>";
                 echo "<td>".$row["lastname"]."</td>";
                 echo "<td>".$row["mobile"]."</td>";
                 echo "<td>".$row["email"]."</td>";
                 echo "<td>".$row["dates"]."</td>";
                 echo "<td>".$row["adult"]."</td>";
                 echo "<td>".$row["childs"]."</td>";
                 echo "</tr>";
             }
             echo '</table>';
         }
}
?>

