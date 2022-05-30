<?php
$title = 'admin : Identification';

ob_start();
?>


<h1>Identification</h1>
    <?php
    
    if(isset($auth)) echo $auth;
    
    ?>
    <form action="index.php?page=admin" method="post">
        <input type="text" name="name" placeholder="Identifiant">
        <input type="password" name="pwd" placeholder="Mot de passe">
        <input type="submit" name="submit" value="go">
    </form><br>
    




<?php
$content = ob_get_clean();

require './view/template.php';