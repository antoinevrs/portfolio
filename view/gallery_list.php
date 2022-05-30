<?php

$title = 'liste des galeries';

ob_start();

echo '<div class="galery_list">' ;

while($r = $liste->fetch(PDO::FETCH_ASSOC)){
        echo  '
        <div class="galery_list_item">
            <h3>'.$r['title'].'</h3>
            <p>'.$r['description'].'</p>
            <a href="index.php?page=gallery_view&id='.$r['id'].'">Voir la galerie</a>
        </div>';
}
echo '</div>';

$content = ob_get_clean();

require 'template.php';