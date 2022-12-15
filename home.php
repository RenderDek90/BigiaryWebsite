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
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div>
            <h1>Biogiary</h1>
            <span>Where your stories will be heard by anyone!</span>
            <p>Find interesting stories from this platform!! Good Luckk!!</p>
            <a href="form.html">
                <button type="submit" id="post_story" value="submit" onclick="">Post Story</button>
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
                echo "Error Found";
            }else{
                while($row =  mysqli_fetch_array($result)) {
                    echo '
                    <div class="card">
                    <h3>' . $row['Title'] . '</h3>
                    <p>' .$row['Story'] .'</p>
                    <span>~ '. $row['Name'].'</span><br>
                    <span>'. $row['Date']. '</span>
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