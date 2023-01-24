<main class="w3-container w3-content">
        <script type="text/javascript">
            function VerifAll(){
            var nom = document.getElementById("nom");
            var prenom = document.getElementById("prenom");
            var titre = document.getElementById("titre");
            var datepublication = document.getElementById("datepublication");
            var commentaire = document.getElementById("commentaire");
            var themes = document.getElementById("themes");
            if( nom=="" || prenom=="" || titre=="" || datepublication=="" || commentaire=="" || themes==""){
                alert("Vous n'avez pas rempli toutes les champs. (:");
                return false;
            }
            else{
                return true;
                document.getElementById("formulaire").submit();
            }
        }
        </script>
        <section class="w3-card-4 w3-display-container w3-margin">
            <div class="w3-container w3-theme">
                <h2>Formulaire de contact</h2>
            </div>
            <form method="_POST" class="w3-container" id="formulaire">
                <p>
                    <label for="nom" class="w3-text-theme">Nom</label>
                    <input type="text" name="nom" id="nom" class="w3-input">
                </p>
                <p>
                    <label for="prenom" class="w3-text-theme">Prénom</label>
                    <input type="text" name="prenom" id="prenom" class="w3-input">
                </p>
                <p>
                    <label for="titre" class="w3-text-theme">Le titre de votre article</label>
                    <input type="text" name="titre" id="titre" class="w3-input">
                </p>
                <p>
                    <label for="age" class="w3-text-theme">Thème</label>
                    <input type="text" name="themes" id="themes" class="w3-input" placeholder="Définissez un thème ou choisissez de la liste">
                    <div  class="form-group">
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
                </p>
                <p>
                    <label for="datepublication" class="w3-text-theme">Date de publication</label>
                    <input type="text" name="datepublication" id="datepublication" class="w3-input" value="<?php
                        $jour = date("d-m-Y");
                        $heure = date("H:i");
                        echo "Le $jour à $heure";
                        ?>">
                </p>
                <p>
                    <label for="commentaire" class="w3-text-theme">Votre article</label>
                    <textarea name="commentaire" id="commentaire" rows="3" class="w3-input"></textarea>
                </p>
                <p>
            <input type="file" name="image" id="image">    
        <?php
        if (isset($_FILES['photo']['tmp_name'])) {  
            $taille = getimagesize($_FILES['photo']['tmp_name']);
            $largeur = $taille[0];
            $hauteur = $taille[1];
            $largeur_miniature = 300;
            $hauteur_miniature = $hauteur / $largeur * 300;
            $im = imagecreatefromjpeg($_FILES['photo']['tmp_name']);
            $im_miniature = imagecreatetruecolor($largeur_miniature
            , $hauteur_miniature);
            imagecopyresampled($im_miniature, $im, 0, 0, 0, 0, $largeur_miniature, $hauteur_miniature, $largeur, $hauteur);
            imagejpeg($im_miniature, 'miniatures/'.$_FILES['photo']['name'], 90);
            echo '<img src="miniatures/' . $_FILES['photo']['name'] . '">';
        }
        ?>
                </p>
                <br>
    <?php
    function ajouter(){
        if (!empty($_POST["titre"]) and !empty($_POST["commentaire"]) and !empty($_POST["themes"]))
        {
        $titre = $_POST["titre"];
        $contenu =  $_POST['commentaire'];
        $theme = $_POST['themes'];
        $datepublication = $_POST['datepublication'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $image=$_POST['image'];
        $fp = fopen("articles.txt", "a");
        $savestring = $prenom."|".$nom."|".$theme."|".$datepublication."|".$titre."|".$article."|".$image."\n";
        fwrite($fp, $savestring);
        fclose($fp);
        echo "<script>alert('Votre article vient d'être publié, Merci')<s/script>";
        echo '<META http-equiv="refresh" content="0.5; URL=Accueil.php">';
        }
    }
    ?>
                <p>
                    <button type="submit" class="w3-btn w3-half w3-theme" onclick="ajouter();VerifAll()">Envoyer</button>
                    <button type="reset" class="w3-btn w3-half w3-theme">Initialiser</button>
                </p>
                <br><br>
            </form>
        </section>
        <br><br><br><br>
</main>


