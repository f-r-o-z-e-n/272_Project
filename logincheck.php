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
            $checkEmail = trim($checkEmail);
        }
        elseif(strpos($line, 'Password') !== false)
        {
            $checkPassword=explode(":",$line)[1];
        }
      }
      echo "(".$checkEmail.")";
      echo "(".$checkPassword.")";
      echo "(".$emailID.")";
      echo "(".$password.")";
    fclose($myfile);
    if ($checkEmail==$emailID && $checkPassword==$password){
        $_SESSION["allowed"]=true;
        echo "inside if";
    }
    else{
        $_SESSION["message"]="Incorrect Email Id or Password";
        echo "inside else";
    }
?>