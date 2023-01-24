<header>
<div role="search" class="form-group w3-half" xtcz="recherche">
			<input type="text" name="SearchText" class="form-control" id="search-site" aria-label="Recherche sur le site" title="Recherche sur le site" placeholder="Recherche">
			<button class="btn btn-link none" type="submit"><img src="search_btn.png" alt="Lancer la recherche sur le site"></button>
	</div>
	<div  class="form-group w3-half">
			<?php

			$fichier = fopen( 'articles.txt', 'r' );
   			while ( !feof( $fichier ) )
   				$articles[] = explode( '|', trim( fgets( $fichier ) ) );
   			fclose( $fichier );

			echo '<form class="w3-section" action="articles.php" method="post"><select class="w3-select w3-border w3-theme-light" name="id">';
			echo '<option value="*">Choisir un thème</option>';
			foreach( $articles as $id => $article )
				echo '<option value="'.$id.'">'.$article[ 2 ].'</option>';
			echo '</select>'
		    ?>
    </div>
</header>
<main>
     <?php include 'publication.php';?>
</main>
<footer class="w3-container w3-padding-32 w3-margin-top">
  <button class="w3-button w3-theme w3-disabled w3-padding-large w3-margin-bottom">Page précédente</button>
  <button class="w3-button w3-theme w3-padding-large w3-margin-bottom">Page suivante</button>
</footer>