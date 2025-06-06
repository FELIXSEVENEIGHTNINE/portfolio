<?php 
    if(isset($_POST["submit"])) {
        $dir = getcwd() . "/projects/";

        $proj_type = $_POST["proj_type"];
        $proj_name = $_POST["proj_name"];

        $html_content = '
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Raffers</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css">
        <link rel="stylesheet" href="../projects.css">
        <link rel="icon" href="../../favicon.ico" type="image/x-icon">
        <script src="index.js"></script>
    </head>
    <body>
        <div class="container-fluid" id="header">
            <nav>
                <ul>
                    <li></li>
                </ul>
                <ul>
                    <li><a href="../../">Home</a></li>
                    <li><a href="../" style="text-decoration: underline;">Projects</a></li>
                    <li><a href="../../about/">About</a></li>
                </ul>
                <ul>
                    <li></li>
                </ul>
            </nav>
        </div>
        <div class="container-fluid" style="position: sticky; top: 75px; padding-top: 10px; padding-bottom: 10px;">
            <a href="javascript:history.back()"><button class="outline">Back</button></a>
        </div>

        <div class="container" style="padding-top: 1%; padding-bottom: 1%;">
            <div class="grid">
                <div>
                    <h2>'.$proj_name.'</h2> <hr>

                    <p></p>
                    
                    <h4> Tools used: </h4> <hr>
                    <ul>
                        <li></li>
                    </ul>

                    <h4> Features: </h4> <hr>
                    <ul>
                        <li></li>
                    </ul>
                </div>
                <div>

                </div>
            </div>
            
        </div>

        <div class="container-fluid" id="footer" style="text-align: center;">
            <small><i>Icon credits go to <a href="https://devicon.dev/">Devicon</a> and <a href="https://icongr.am/devicon">Icongram</a>.</i></small> <br>
            <small><i>2018 - 2025</i></small>
        </div>
    </body>
</html>
        ';

        if ($proj_type == "personal") {
            $dir = $dir . "p/";
            $folder_count = countFolder("p", $dir);

            file_put_contents($dir . $folder_count . ".html", $html_content);
        }
        else if ($proj_type == "school") {
            $dir = $dir . "s/";
            $folder_count = countFolder("s", $dir);
            file_put_contents($dir . $folder_count . ".html", $html_content);
        }
        else {
            echo "Choose a project type.";
        }
    }

    function countFolder($type, $dir) {
        $filecount = 0;

        if ($type == "s") {
            $files2 = glob( $dir . "*");
            if($files2) {
                $filecount = count($files2);
            }

            return $filecount;
        }

        else if ($type == "p") {
            $files2 = glob( $dir . "*");
            if($files2) {
                $filecount = count($files2);
            }

            return $filecount;
        }
    }

?>
<form method="POST">
    <input type="radio" id="personal" name="proj_type" value="personal">
    <label for="personal">Personal</label><br>
    <input type="radio" id="school" name="proj_type" value="school">
    <label for="school">School</label><br>

    <input type="text" placeholder="Enter project name" name="proj_name"><br>
    <!-- <textarea placeholder="" name="proj_para"></textarea>

    <input type="text" placeholder="Enter content" name="proj_para"><br> -->

    <input type="submit" name="submit">
</form>