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
  <?php
    session_start();
    if (!isset($_SESSION['allowed'])){
        header('location:login.php');
    }
    ?>
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
        <pre><h1 class="h1Header" style="padding-left: 300px;">
          Contacts</h1>
        </pre>
      </div>
      <div class="row align-items-center">
        <p>
        <?php
            $file = fopen("users.txt", "r");
            while(!feof($file)) {
                echo "<h4 class='contacts'>".fgets($file). "</h4><br>";
            }
            fclose($file);
        ?>
    </div>
        </p>
      </div>
      <div class="footer">
        <p>@copyright: afroz@sjsu.edu</p>
      </div>
    </div>
  </body>
</html>
