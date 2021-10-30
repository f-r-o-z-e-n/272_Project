<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/index.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <title>Spartan Tours and Travels</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row align-items-start" style="background-color: teal">
        <div class="col-2">
          <img src="Images/logo.jpg" class="logo" />
        </div>
        <div class="col-10">
          <div class="row header-text">
            <h2>Spartan Tours and Travels</h2>
          </div>
          <div class="row">
            <nav class="nav justify-content-end">
              <a class="nav-link nav-link" href="login.php">Login</a>
              <a class="nav-link nav-link" href="logout.php">Logout</a>
            </nav>
          </div>
          <div class="row">
            <nav class="nav justify-content-start">
              <a class="nav-link active nav-link" href="./index.php">Home</a>
              <a class="nav-link active nav-link" href="./about.php">About</a>
              <a class="nav-link active nav-link" href="./services.php">Services</a>
              <a class="nav-link active nav-link" href="./news.php">News</a>
              <a class="nav-link active nav-link" href="./contacts.php">Contacts</a>
              <a class="nav-link active nav-link" href="./users.php">Users</a>
              <a class="nav-link active nav-link" href="./userSection.php">Users from Database</a>
              <a class="nav-link active nav-link" href="./top.php">Last five viewed services</a>
              <a class="nav-link active nav-link" href="./mostVisited.php">Top five most Visited services</a>
            </nav>
          </div>
        </div>
      </div>
      <div class="paragraph">
        <pre><h1 class="h1Header" style="padding-left: 100px;">
          Searched Users</h1>
        </pre>
      </div>
      <div class="row align-items-center">
      <h4 class='contacts'>
      <?php
        session_start();
        $query='';
        $con =mysqli_connect('localhost','root','afroz');
        mysqli_select_db($con,'spartanTours');
        if ($_POST['check']==='names'){
            $query='select * from user where first_name="'.$_POST['first_name'].'"';
            $result=mysqli_query($con,$query);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "Name: " . $row["first_name"]. " " . $row["last_name"]. "<br> Email: ".$row["email"]. "<br> Address: ".$row["home_address"]. "<br> Home Phone: ". $row["home_phone"]. "<br> Cell Phone: ". $row["cell_phone"]. "<br><br>";
                    echo "------------------------------------------------------------------------</br>";
                }
            } else {
                echo "No such user found";
            }
        }
        else if($_POST['check']==='email'){
            $query='select * from user where email="'.$_POST['emailId'].'"';
            $result=mysqli_query($con,$query);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "Name: " . $row["first_name"]. " " . $row["last_name"]. "<br> Email: ".$row["email"]. "<br> Address: ".$row["home_address"]. "<br> Home Phone: ". $row["home_phone"]. "<br> Cell Phone: ". $row["cell_phone"]. "<br><br>";
                    echo "------------------------------------------------------------------------</br>";
                }
            } else {
                echo "No such user found";
            }
        }
        else if($_POST['check']==="phoneNumber"){
            $query='select * from user where cell_phone="'.$_POST['phone_number'].'"';
            $result=mysqli_query($con,$query);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "Name: " . $row["first_name"]. " " . $row["last_name"]. "<br> Email: ".$row["email"]. "<br> Address: ".$row["home_address"]. "<br> Home Phone: ". $row["home_phone"]. "<br> Cell Phone: ". $row["cell_phone"]. "<br><br>";
                    echo "------------------------------------------------------------------------</br>";
                }
            } else {
                echo "No such user found";
            }
        }
    ?>
      </h4>
      </div>
      <div class="footer">
        <p>@copyright: afroz@sjsu.edu</p>
      </div>
    </div>
  </body>
</html>
