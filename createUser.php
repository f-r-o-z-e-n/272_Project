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
            </nav>
          </div>
        </div>
      </div>
      <div class="paragraph">
        <pre><h1 class="h1Header" style="padding-left: 100px;">
          Create User</h1>
        </pre>
      </div>
      <div class="row align-items-center">
      <div class="container divContainer">
        <h3>Register User</h3>
        <form  method="post" action="addUser.php">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control"  placeholder="First Name" required name='first_name'>
        </div>
        <div class="form-group">
            <label>last Name</label>
            <input type="text" class="form-control" placeholder="Last Name" required name='last_name'>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Email" required name='email'>
        </div>
        <div class="form-group">
            <label>Home Address</label>
            <input type="text" class="form-control"  placeholder="Address" required name='home_address'>
        </div>
        <div class="form-group">
            <label>Home Phone</label>
            <input type="text" pattern="[1-9]{1}[0-9]{9}" class="form-control"  placeholder="Home Phone" name='home_phone' >
        </div>
        <div class="form-group">
            <label>Cell Phone</label>
            <input type="text" pattern="[1-9]{1}[0-9]{9}" class="form-control"  placeholder="Cell Phone" required name='cell_phone'>
        </div>
        
        <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
      </div>
      <div class="footer">
        <p>@copyright: afroz@sjsu.edu</p>
      </div>
    </div>
  </body>
</html>
