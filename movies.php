<?php
    $pic = array('1.png','2.png','3.png','4.png','5.png','6.png','7.png','8.png','9.png','10.jpg');
    shuffle($pic);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->        
    <link rel="stylesheet" href="./styles.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>🎬 Movies</title>
</head>
<body>
    <div class="header">
        <h1>FAVOURITE MOVIES</h1>
    </div>

    <div class="row navbar">
        <div class="col offset-s3 s1">
            <a class="waves-effect waves-teal btn-flat btn-large" href="index.php">Home</a>
        </div>
        <div class="col offset-s1 s1">
            <a class="waves-effect waves-teal btn-flat btn-large" href="movies.php">Movies</a>
        </div>
        <div class="col offset-s1  s1">
            <a class="waves-effect waves-light btn-flat btn-large" href="personalities.php">Personalities</a>
        </div>
        <div class="col offset-s1 s1">
            <a class="waves-effect waves-light btn-flat btn-large" href="cars.php">Cars</a>
        </div>
     </div>

    
     <div class="container">
         <p>Please <b>🔄 reload</b> or click on <b>MOVIES</b> button to shuffle the images</p>
         <div class="row">
             <div class="col">
                <?php
                    for($i = 0; $i < 10; $i++)
                    {
                        $source = "./assets/movies/".$pic[$i];  
                        echo "<img src=".$source." width='205'>";
                    }
                ?>
             </div>
         </div>
     </div>
</body>
</html>