<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
		Your Name: <?php echo $_POST["yourname"];?></br>
		Email: <?php echo $_POST["email"]; ?></br>
		Phone Number: <?php echo $_POST["tel"];?></br>
		Message:<?php if(isset($_POST["mess"])) { echo $_POST["mess"]; } ?>
    </body>
</html>