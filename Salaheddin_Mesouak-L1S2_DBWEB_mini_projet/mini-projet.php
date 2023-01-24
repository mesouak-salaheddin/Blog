<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-cyan.css"> 
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Verdana'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<title>MSK Blog</title>
</head>

<body>
	<?php include 'entete.php';?>
	<?php include 'menu.php';?>
	<main>
	<?php 
        if (isset($_GET["page"])){
            include $_GET["page"];
        }
        else{
            include 'Accueil.php';
        }
    ?>
    </main>
	<?php include 'pied.php';?>
</body>

</html>


