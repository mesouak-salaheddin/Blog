<footer class="w3-center w3-bar w3-theme w3-padding">
    <?php 
        $fichier = "";
        if (isset($_GET["page"])){
            $fichier = $_GET["page"];
        }
        else{
            $fichier = 'mini-projet.php';
        }
        echo "Cette page a été modifié le : " . date ("F d Y H:i:s.", filemtime($fichier));
    ?>
    <br>
    <p>
    Contactez-nous aussi sur : <a html="#" class="fa fa-facebook-square"></a>&nbsp;<a html="#" class="fa fa-twitter"></a>&nbsp;<a html="#" class="fa fa-instagram"></a>
    </p>
</footer>