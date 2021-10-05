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
              <a class="nav-link nav-link" href="#">Signup</a>
            </nav>
          </div>
          <div class="row">
            <nav class="nav justify-content-start">
              <a class="nav-link active nav-link" href="./index.php">Home</a>
              <a class="nav-link active nav-link" href="./about.php">About</a>
              <a class="nav-link active nav-link" href="./services.php">Services</a>
              <a class="nav-link active nav-link" href="./news.php">News</a>
              <a class="nav-link active nav-link" href="./contacts.php">Contacts</a>
            </nav>
          </div>
        </div>
      </div>
      <div class="paragraph">
        <pre>
        <?php
            session_start();

            if (isset($_SESSION['message'])){
                $message=$_SESSION['message'];
            }
            else{
                $message="";
            }
        ?>
        <div class="container mainContent" >
        <h1>Login</h1>
        <form method="post" action="logincheck.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="emailId">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <?php
            echo "<h1 className='errorMessage'>".$message."</h1>";
        ?>
</form>

    </div>
        </pre>
      </div>
      <div class="row align-items-center">
      <h4 class='contacts'>
            Life is an adventure! 
      </h4>
      </div>
      <div class="footer">
        <p>@copyright: afroz@sjsu.edu</p>
      </div>
    </div>
  </body>
</html>

