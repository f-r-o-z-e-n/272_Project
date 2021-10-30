<!DOCTYPE html>
<html lang="en">

<?php
// $con = mysqli_connect('localhost', 'root', '');
$con = mysqli_connect('localhost', 'root', 'afroz');
mysqli_select_db($con, 'spartanTours');
$query = 'select * from services where ID="' . $_GET['id'] . '"';
$result = mysqli_query($con, $query);
$prod = $result->fetch_assoc();
// $hits = $prod["hits"] + 1;
// $conn->query("UPDATE products SET hits = " . $hits . " WHERE id = " . $id . ";");
// $conn->close();
?>

<?php
if (isset($_COOKIE["id"])) {
  if (explode(",", $_COOKIE["id"])[0] != $prod["ID"]) {
    setcookie("id", $prod["ID"] . "," . $_COOKIE["id"], time() + (86400 * 30));
  }
} else {
  setcookie("id", $prod["ID"], time() + (86400 * 30));
}
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/index.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
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
          </nav>
        </div>
      </div>
    </div>
    <div class="paragraph">
      <pre>
        <h1 class="h1Header" style="padding-left: 300px;">
        <?php echo $prod["Title"] ?></h1>
        </pre>
    </div>
  
      <div class="row align-items-center">
      <h4 class='contacts'>
        <?php echo $prod["Description"] ?>
        <!-- The Mountains are calling for those who love the heights -->
      </h4> 
      <h4 class='contacts'>
        The package is priced at $<?php echo $prod["Price"] ?> only.
      </h4> 

       <div>
          <img src="./Images/hiker.jpeg" alt="Travel" style="width:50%">
          <div class="container">
          </div>
        </div>
     </div>


    
    <div class="footer">
      <p>@copyright: afroz@sjsu.edu</p>
    </div>
  </div>
</body>

</html>

 