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
            $checkEmail = str_replace(' ','',$checkEmail);
            echo '('.$checkEmail.')';
            echo strlen($checkEmail);
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
    }
    else{
        $_SESSION["message"]="Incorrect Email Id or Password";

    }
?>