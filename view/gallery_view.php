<?php

$gallery = $info_gallery->fetch();

ob_start();

echo '<div class="gallery_infos">';
echo '<p> Description : '.$gallery['description'];
echo '</div>';

echo '<div class="photo_list">' ;

while($r = $liste->fetch(PDO::FETCH_ASSOC)){
        echo  '
        <div class="photo_list_item">
            <a href="index.php?page=photo_view&id='.$r['id'].'">
                <img src="./public/gallery/'.$gallery['id'].'/'.$r['nom'].'" alt="'.$r['legend'].'">
            </a>
        </div>';
}

echo '</div>';

$content = ob_get_clean();

$title = $gallery['title'];

require 'template.php';