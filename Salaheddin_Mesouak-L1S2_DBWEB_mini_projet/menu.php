
<nav class="w3-bar w3-margin-bottom w3-theme">
<?php
    $email = array (
        "Présentation" => "mini-projet.php?page=Presentation.php",
        "Accueil" => "mini-projet.php?page=Accueil.php",
        "Ajouter nouvelle publication" => "mini-projet.php?page=Ajouter.php");
		
    foreach ($email as $nom => $mail) {
        echo "<a href=\"$mail\" class='w3-bar-item w3-button'>$nom</a>";
    }
?>
</nav>

