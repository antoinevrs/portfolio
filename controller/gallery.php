<?php

require './model/ManageGallery.php';
$gal = new ManageGallery();
$liste = $gal->getGalleryList();

require './view/gallery_list.php';