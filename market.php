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