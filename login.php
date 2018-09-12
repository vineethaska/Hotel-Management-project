<?php
$con = mysqli_connect('localhost:3306','root','vineeth@aska','swagath');

if ($con->connect_error){
  die("connection error :".$con->connect_error);
}
session_start();
$name=$_POST["username"];
$pswd=$_POST["password"];

if($name!='vineeth'&& $pswd!='laddubhai'){
     echo "sorry...!password is incorrect<br>";
        include "login.html";
        
}
    else{
       
        header("location:details.php");
        
    }
/*if(isset($_POST["insert"]))
  {
      $check= getimagesize($_FILES["image"]["tmp_name"]);
      if($check!=FALSE)
      {       
          

        $f= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
         $sqll="insert into image values('$f')";
         mysqli_query($con, $sqll);
        
         
      }
      else
      {echo '<script>alert("PLEASE INSERT VALID IMAGE")</script>';
include 'login.html';
      }
  }
echo "name is:".$name;
echo "<br>password is:".$pswd;

$sql="insert into form1(name,password) values"
        ."('".$name."','".$pswd."')";
//echo "$sql";
if(!mysqli_query($con, $sql))
{
echo "<br>details are not stored";
}
else
{
echo "<br>details are stored";
}
 
?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
$con = mysqli_connect('localhost:3306','root','vineeth@aska','swagath');

if ($con->connect_error){
  die("connection error :".$con->connect_error);
}

            $sql="select * from rooms";

$result=mysqli_query($con, $sql);
if(!$result){
    echo "Details are empty";
}
else{
    ?>
<table border="2">
    <tr>
        <th>firstname</th>
        <th>lastname</th>
    <th>mobileno</th>
    <th>email</th>
    <th>adults</th>
    <th>childs</th>
    </tr>
    


     <?php
     
         if(mysqli_num_rows($result)){
             while($row= mysqli_fetch_assoc($result)){
                 echo "<tr>";
                 echo "<td>".$row["firstname"]."</td>";
                 echo "<td>".$row["lastname"]."</td>";
                 echo "<td>".$row["moblie"]."</td>";
                 echo "<td>".$row["email"]."</td>";
                 echo "<td>".$row["adult"]."</td>";
                 echo "<td>".$row["childs"]."</td>";
                 echo "</tr>";
             }
             echo '</table>';
         }
}*/
?>

