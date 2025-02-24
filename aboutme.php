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
        <p id = "javaDemo"></p>
        <script>
            function randomColor() {
                var message = "Hello World! (java)";
                var newMessage = "";
                for (var i = 0; i < message.length; i++) {
                    var color = Math.floor(Math.random() * 16777215).toString(16);
                    while (color.length < 6) {
                        color = "0" + color; // Ensure the color code is 6 digits long
                    }
                    var letter = message.charAt(i);
                    newMessage += "<span style='color:#" + color + "'>" + letter + "</span>";
                }
                document.getElementById("javaDemo").innerHTML = newMessage;
            }

            // Call the function every 1000 milliseconds
            setInterval(randomColor, 1000);
        </script>
    </body>
</html>