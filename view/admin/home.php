<?php

$title = "Accueil Admin";

ob_start();
?>

<ul>
    <li><a href="index.php?page=admin&action=gallery">Gérer les galleries</a></li>
    <li><a href="index.php?page=admin&action=photo">Gérer les photos</a></li>
    <li><a href="index.php?page=admin&action=comment">Gérer les commentaires</a></li>
    <li><a href="index.php?page=admin&deconex">Déconnexion</a></li>
</ul>

<?php
$content = ob_get_clean();

require './view/template.php';