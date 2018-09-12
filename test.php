<?php
session_start();
$test=$_POST["verify"];


$t=$_SESSION["otp"];


if($test==$t)
{   
$email=$_SESSION["gmail"];
$firstname=$_SESSION["fn"];
$lastname=$_SESSION["ln"];
$mobileNo=$_SESSION["mn"];
$adult=$_SESSION["ad"];
$childs=$_SESSION["ch"];
$date=$_SESSION["date"];
///echo "$email"."--"."$firstname"."--"."$lastname"."--"."$mobileNo"."--"."$adult"."--"."$childs"."--";
  
$con = mysqli_connect('localhost:3306','root','vineeth@aska','swagath');

if (!$con){
  echo "not connected to database";
}
else
{ 
        $name_img=$email."_".$_FILES['image']['name'];
        $target_dir_img="images/";
        $target_file_img= $target_dir_img .$email."_". basename($_FILES['image']['name']);
        $imageFileType= strtolower(pathinfo($target_file_img,PATHINFO_EXTENSION));
        $image_base64 = base64_encode(file_get_contents($_FILES['image']['tmp_name']) );
        $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

    $query="insert into room1(firstname,lastname,mobile,email,adult,childs,dates,image) "
            . "values('$firstname','$lastname','$mobileNo','$email','$adult','$childs','$date','".$image."')";
    ///echo $query;
    $result=mysqli_query($con,$query);
    if(!$result)
    {
        echo 'pls......! enter the correct details..!';
        include 'register.html';
    }
    else{
        echo 'registered sucessfully';
        ?>
<table>
    <tr>
        <td>First name</td><td><?php echo $firstname?></td>
    </tr>
    <tr>
        <td>Last name</td><td><?php echo $lastname?></td>
    </tr>
    <tr>
        <td>Mobile no</td><td><?php echo $mobileNo?></td>
    </tr>
    <tr>
        <td>Email</td><td><?php echo $email?></td>
    </tr>
    <tr>
        <td>Date</td><td><?php echo $date?></td>
    </tr>
    <tr>
        <td>Adults</td><td><?php echo $adult?></td>
    </tr>
    <tr>
        <td>Child</td><td><?php echo $childs?></td>
    </tr>
</table>
<?php
    }
    }
}
?>