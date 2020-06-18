 <?php
include_once '../Models/functions.php';
include_once '../php/array.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sodybos</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
<header class="sticky-top">
    <?php menu($menu); ?>
</header>
<section id="home">
    <?php display_text($text_columns); ?>
</section> 
<script src="../../assets/js/jQuery.js"></script>
<script src="../../assets/js/bootstrap.bundle.js"></script>
</body>
</html>
