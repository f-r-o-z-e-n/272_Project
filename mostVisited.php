<!DOCTYPE html>
<html lang="en">

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
                        <a class="nav-link active nav-link" href="./mostVisited.php">Top five most Visited services</a>
                        
                    </nav>
                </div>
            </div>
        </div>
        <div class="paragraph">
            <pre><h1 class="h1Header" style="padding-left: 60px;">
          Top five most visited services</h1>
        </pre>
        </div>
        <div class="row align-items-center">
            <h4 class='contacts'>
                <?php
                if (!isset($_COOKIE["count"])) {
                    echo "<h1>There is no visited page till now</h1>";
                } else {
                    if (!isset($_COOKIE["visited_pages"])) {
                        echo "<h1>There is no visited page till now</h1>";
                    } else {
                        if ($_COOKIE["count"] == 0) {
                            echo "<h1>There is no visited page till now</h1>";
                        } else {
                            $array = $_COOKIE["visited_pages"];
                            $counts = array_count_values($array);
                            // print_r($counts);
                            arsort($counts);
                            $keys = array_keys($counts);
                            $check = 0;
                            for ($i = 0; $i < sizeof($keys); $i++) {
                                if ($keys[$i] == "abc") {
                                    continue;
                                }
                                echo "<h1 class='result'>You visited " . $keys[$i] . "     :    " . $counts[$keys[$i]] . " times</h1><br>";
                                $check = $check + 1;
                                if ($check == 5) {
                                    break;
                                }
                            }
                            echo "<br>";
                        }
                    }
                }

                ?>
            </h4>
        </div>

        <div class="row align-items-center">
            <img src="./Images/travel.jpg" alt="Travel" style="width:100%">
            <div class="container">

            </div>
        </div>



        <div class="footer">
            <p>@copyright: afroz@sjsu.edu</p>
        </div>
    </div>
</body>

</html>