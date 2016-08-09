<html>

<head>
    <title>Strona</title>

    <!-- css -->
    <link rel="stylesheet" href="stylesheet.css" class="stylesheet">

    <!-- Boostrap declaration -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" class="stylesheet" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" class="stylesheet" />

</head>


<body>
    <?php
    include("templates/menu/menu.php");
    $menu = new Menu(null);

    include("templates/application/application.php");
    include("templates/footer/footer.php");
    ?>


        <!-- Boostrap section -->
        <script src="jQuery/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>