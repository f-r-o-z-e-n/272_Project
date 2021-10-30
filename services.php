<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/index.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <title>Spartan Tours and Travels</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      width: 20%;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
      padding: 2px 16px;
    }
  </style>
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
          </nav>
        </div>
      </div>
    </div>
    <div class="paragraph">
      <pre><h1 class="h1Header" style="padding-left: 300px;">
          Services</h1>
        </pre>
    </div>
    <div class="row align-items-center">
      <h4 class='contacts'>
        We provide all kinds of travel packages all over the globe.
      </h4>

      <h2>Packages List</h2>

      <div class="card"> <a href="./hiking.php">
          <img src="./Images/hiker.jpeg" alt="Hiker" style="width:100%">
          <div class="container">
            <h4><b>Hiking Package</b></h4>
            <p>Explore the hills</p>
          </div>
        </a>
      </div>

      <div class="card">
        <img src="./Images/lake.jpeg" alt="Lake" style="width:100%">
        <div class="container">
          <h4><b>Lake Package</b></h4>
          <p>Explore the Lakes</p>
        </div>
      </div>

      <div class="card">
        <img src="./Images/beaches.webp" alt="Beaches" style="width:100%">
        <div class="container">
          <h4><b>Beach Package</b></h4>
          <p>Explore the beaches</p>
        </div>
      </div>

      <div class="card">
        <img src="./Images/desert.jpeg" alt="Deserts" style="width:100%">
        <div class="container">
          <h4><b>Desert Package</b></h4>
          <p>Explore the deserts</p>
        </div>
      </div>

      <div class="card">
        <img src="./Images/forests.jpeg" alt="Forests" style="width:100%">
        <div class="container">
          <h4><b>Forest Package</b></h4>
          <p>Explore the forest</p>
        </div>
      </div>

      <div class="card">
        <img src="./Images/parachute.jpeg" alt="Parachutes" style="width:90%">
        <div class="container">
          <h4><b>Parachute Package</b></h4>
          <p>Explore the parachutes</p>
        </div>
      </div>

      <div class="card">
        <img src="./Images/monuments.jpeg" alt="Monuments" style="width:100%">
        <div class="container">
          <h4><b>Monument Package</b></h4>
          <p>Explore the monuments</p>
        </div>
      </div>

      <div class="card">
        <img src="./Images/greenary.jpeg" alt="Greenary" style="width:100%">
        <div class="container">
          <h4><b>Greenary Package</b></h4>
          <p>Explore the Greenary</p>
        </div>
      </div>

      <div class="card">
        <img src="./Images/roads.jpeg" alt="Roads" style="width:100%">
        <div class="container">
          <h4><b>Roads Package</b></h4>
          <p>Explore the roads</p>
        </div>
      </div>

      <div class="card">
        <img src="./Images/flower.webp" alt="Flower fields" style="width:100%">
        <div class="container">
          <h4><b>Flower Package</b></h4>
          <p>Explore the flower fields</p>
        </div>
      </div>


    <!-- </div>
    <div class="footer">
      <p>@copyright: afroz@sjsu.edu</p>
    </div>
  </div> -->
</body>

</html>