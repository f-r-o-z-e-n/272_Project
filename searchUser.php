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
    <script>
        function getInput(){
            var Inputtype = document.getElementById('inputState').value;
            if (Inputtype=="names"){
                document.getElementById('options').innerHTML='<label for="exampleInputEmail1">First Name</label><input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" name="first_name" required> </div><button type="submit" class="btn btn-success">SEARCH</button></div>';
            }
            else if(Inputtype=="email"){
                document.getElementById('options').innerHTML='<label for="exampleInputEmail1">Email</label><input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="emailId" required></div><button type="submit" class="btn btn-success">SEARCH</button></div>';
            }
            else if(Inputtype=="phoneNumber"){
                document.getElementById('options').innerHTML='<label for="exampleInputEmail1">Phone Number</label><input type="text" pattern="[1-9]{1}[0-9]{9}" class="form-control" id="exampleInputEmail1" placeholder="Phone Number" name="phone_number" required></div><button type="submit" class="btn btn-success">SEARCH</button></div>';
            }
            else if(Inputtype=="..."){
                document.getElementById('options').innerHTML="";
            }
        }
    </script>
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
        <pre><h1 class="h1Header" style={padding-left: 100px;}>
          Search User</h1>
        </pre>
      </div>
      <div class="row align-items-center">
      <div class="container mainDiv">
    <form action="searchedUsers.php" method="post">
    <div class="row container__select">
        <div class="form-group col-md-6">
        <label for="inputState">Choose The Criteria To Search</label>
        <select id="inputState" class="form-control" onchange="getInput()" name="check">
            <option value="..." selected>...</option>
            <option value="names">name</option>
            <option value="email">Email ID</option>
            <option value="phoneNumber">Phone Number</option>
        </select>
        </div>
    </div>
    <div class="row container__input">
        <div class="form-group col-md-6">
        <div class="form-group" id="options"> 
    </div>
    
</div>
      </div>
      
      <div class="footer">
        <p>@copyright: afroz@sjsu.edu</p>
      </div>
    </div>
  </body>
</html>
