<html>
    <head>
        <title>About Me</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <?php include 'navbar.php'; ?>

    <body>
        <?php
        
        $message = "Hello World!";
        for ($i=0; $i<strlen($message); $i++) {
            $color = random_int(0,16777216);
            $hex = dechex($color);
            $letter = $message[$i];
            echo "<span style='color:#$hex'>$letter</span>";
        }
        ?>
    </body>
</html>