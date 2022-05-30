<?php

require './model/ManageGallery.php';
require './model/ManagePhoto.php';

$gal = new ManageGallery();
$info_gallery = $gal->getGalleryInfos($id);

$photo = new ManagePhoto();
$liste = $photo->getPhotoList($id);

require './view/gallery_view.php';