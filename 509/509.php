
<!DOCTYPE html>
<?php
    if (!class_exists('lessc')) {
       include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/647.less', 'css/647.css');
?>
<html>
    <head>
        <title>Abudance</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/647.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
      <?php include '../509/509-content.php'; ?>
    </body>
</html>
