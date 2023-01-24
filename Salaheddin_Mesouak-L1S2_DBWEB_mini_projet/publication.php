<?php
	$file = fopen("articles.txt","r");
	while(!feof($file))
	{
		$donnees= fgets($file);
		list($prenom,$nom,$theme,$datepublication,$titre,$message,$image) = explode("|", $donnees);
		$i=0;
		echo"
			<div class='w3-container'>
			<article>
			<header>
			<h1> $i - $theme </h1>
			<h2> $titre </h2>
			</header>
							
			<div class='w3-container w3-card-4'>
			       <p> $message <br> <img src='$image' alt='image'> </p>
			</div>
			<footer >
			      <p class='w3-right'> Auteur: $prenom $nom  Publié $datepublication </p> 
			</footer>
			</article>
			</div>";
		echo '<a href="Modifier.php" class="w3-right w3-theme">La modification</a><br>';
		echo '<a href="Supprimer.php" class="w3-right w3-theme">La suppression</a><br>';
		$i=$i+1;
	}
?>