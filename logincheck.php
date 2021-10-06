<?php 
    $password= $_POST['password'];
    $emailID= $_POST['emailId'];
    $checkEmail="";
    $checkPassword="";
    session_start();
    $myfile = fopen("credentials.txt", "r");
    while(!feof($myfile)) {
        $line=fgets($myfile);
        if (strpos($line, 'Email') !== false) {
            $checkEmail=explode(":",$line)[1];
        }
        elseif(strpos($line, 'Password') !== false)
        {
            $checkPassword=explode(":",$line)[1];
        }
      }
    fclose($myfile);
    echo 'console.log('. $checkEmail .')';
    echo 'console.log('. $checkPassword .')';
    echo 'console.log('. $emailID .')';
    echo 'console.log('. $password .')';
    if ($checkEmail==$emailID && $checkPassword==$password){
        $_SESSION["allowed"]=true;
        header('location:users.php');
    }
    else{
        $_SESSION["message"]="Incorrect Email Id or Password";
        header('location:login.php');
    }
?>