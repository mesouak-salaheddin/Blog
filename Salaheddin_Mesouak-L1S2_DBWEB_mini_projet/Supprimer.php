<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-cyan.css"> 
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Verdana'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <title>MSK Blog</title>
    <script type="text/javascript">
            function VerifAll(){
            var numero = document.getElementById("numero");
            if(numero==""){
                alert("Vous n'avez pas donné le numéro d'article. (:");
                return false;
            }
            else{
                return true;
                document.getElementById("formulaire3").submit();
            }
        }
    </script>
</head>
<main class="w3-container w3-content">
        <section class="w3-card-4 w3-display-container w3-margin">
            <div class="w3-container w3-theme">
                <h2>Formulaire de contact</h2>
            </div>
            <form method="_POST" class="w3-container" id="formulaire3">
                <?php
                function supprimer(){
                $numero = $_POST["numero"];
                $ptr = fopen("articles.txt", "r");
                $contenu = fread($ptr, filesize("articles.txt"));
                fclose($ptr);
                $contenu = explode(PHP_EOL, $contenu);
                unset($contenu[$numero]); 
                $contenu = array_values($contenu); 
                $contenu = implode(PHP_EOL, $contenu);
                $ptr = fopen("articles.txt", "w");
                fwrite($ptr, $contenu);
                echo "<script>alert('Votre article vient d'être supprimer, Merci')<s/script>";
                echo '<META http-equiv="refresh" content="0.5; URL=Accueil.php">';
                }
                ?>
                <p>
                    <label for="numero" class="w3-text-theme">Entrez le numéro de l'article à supprimer</label>
                    <input type="text" name="numero" id="numero" class="w3-input">
                </p>
                <p>
                    <button type="submit" class="w3-btn w3-half w3-theme" onclick="supprimer();'">Supprimer</button>
                    <button type="reset" class="w3-btn w3-half w3-theme">Initialiser</button>
                </p>
                <br><br>
            </form>
        </section>
</main>
