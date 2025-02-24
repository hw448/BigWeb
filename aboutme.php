<html>
    <head>
        <title>About Me</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <?php include 'navbar.php'; ?>

    <body>
        <?php
        $color = random_int(0,16777216);
        $hex = dechex($color);
        echo "<h1 style = 'color:#$hex'>Lol, Lmao</h1>";
        ?>
    </body>
</html>