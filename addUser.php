<?php
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $home_address=$_POST['home_address'];
    $home_phone=$_POST['home_phone'];
    $cell_phone=$_POST['cell_phone'];
    session_start();

    $con =mysqli_connect('localhost','root','afroz');
    mysqli_select_db($con,'spartanTours');
    $query="insert into user values (null,'$first_name','$last_name','$email','$home_address','$home_phone','$cell_phone')";
    echo $query;
    $result=mysqli_query($con,$query);
    echo $result;
    if($result){
        $_SESSION["result"]="User added to the database successfully";
        header('location:userSection.php');
    }else{
        $_SESSION["result"]="Failed to add user to Database";
        header('location:userSection.php');
    }

?>