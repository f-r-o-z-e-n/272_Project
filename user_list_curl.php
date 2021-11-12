<?php


 $servername = "localhost";
 $username = "root";
 $password = "afroz";
 $dbname = "spartanTours";   
$conn= mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

$query =  mysqli_query($conn,"select * from user"); 

$counter = 1;
while($data = mysqli_fetch_array($query))
            {
             ?>
             <?php
           
             echo "<h5>$counter) Name:".$data['first_name']."  " .$data['last_name']. "</h5>" ;
            $counter++;
            
             ?>
            <?php
            }


?>