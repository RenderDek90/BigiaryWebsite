<?php

include "Connect.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biogiary</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <header>
        <div>
            <h1>Biogiary</h1>
            <span>Where your stories will be heard by anyone!</span>
            <p>Find interesting stories from this platform!! Good Luckk!!</p>
            <a href="form.html">
                <button id="post_story">Post Story</button>
            </a>
        </div>
    </header>
    <section>
        <h1>Stories</h1>
        <div class="container">
            <?php

            $sql = "SELECT * FROM diary";
            $result = mysqli_query($config, $sql);
            // $output = array($result);
            if (!$sql) {
                echo '<h1>[No Post Yet]</h1>';
            }else{
                while($row =  mysqli_fetch_array($result)) {

                    echo '
                    <div class="card">
                    <div class="card-title">
                    <h3>' . $row['Title'] . '</h3>
                    <p>' .$row['Story'] .'</p>
                    </div>
                    <div class = "footer-card">
                    <span>~ '. $row['Name'].'</span><br>
                    <span>'. $row['Date']. '</span>
                    </div>
                </div>
                    ';
                }

            }
            
        ?>

        </div>

        
    </section>
    <footer>
        <span>DSITE Projects | All Rights Reserved</span>
    </footer>
</body>

</html>