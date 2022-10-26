<?php
$menu = ["about", "works","perks","contact"];
$logo = ["Javascript", "HTML","CSS","C","Python", "Php", "Twig","Java"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Louis'dev</title>

    <script src="https://kit.fontawesome.com/6d9cc71036.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/index.css">
</head>
<body>
<!-- nav -->
<?= include_once 'nav.php' ?>


<!-- fixed components -->
<?= include_once 'components.php' ?>


<!-- home page -->
<?= include_once 'home.php' ?>

<!-- content  -->
<?= include_once 'about.php' ?>
<?= include_once 'works.php' ?>
<?= include_once 'perks.php' ?>
<?= include_once 'contact.php' ?>


</body>
<footer>
<p>Designed & Built by Louis Gurita</p>
</footer>

<script type="text/javascript" src="scripts/vanilla-tilt.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type="text/javascript" src="scripts/init.js"></script>
</html>