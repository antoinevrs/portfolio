<?php

$photo = $info_photo->fetch();

ob_start();

?>
<div class="contain">

    <?php
    echo '<div class="photo_infos">';
    echo '<a href="index.php?page=gallery_view&id='.$photo['gallery_id'].'">Revenir à la galerie</a>';
    echo '<p> Legende : '.$photo['legend'].'</p>';
    echo '<img src="./public/gallery/'.$photo['gallery_id'].'/'.$photo['nom'].'" alt="'.$photo['legend'].'">';
    echo '</div>';
    ?>
    
    <section class="form">
        <div class="formulaire">
            <form action="index.php?page=photo_view&id=<?=$id?>" method="post">
                <input type="text" name="nom" placeholder="Nom">
                <input type="text" name="email" placeholder="Email">
                <textarea name="message" id="" cols="30" rows="10" placeholder="Votre message"></textarea>
                <input type="submit" name="submit" value="Enregistrer">
            </form>
        </div>
    </section>
</div>

<section class="list">
    <h2>Liste des commentaires</h2>
    <?php
    // Dans la view (nl2br code php pour l'espace)
    if(isset($list_comment)) {
        while($liste = $list_comment->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="list_item">
            De : '.$liste['author'].' (<a href="mailto:'.$liste['mail'].'">'.$liste['mail'].'</a>)
            <p>'.nl2br($liste['comment']).'</p>
            </div>';
        }
    }
    ?>
</section>
<?php
$content = ob_get_clean();
$title = 'Photo : ' .$photo['legend'];

require 'template.php';