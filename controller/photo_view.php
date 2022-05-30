<?php

require './model/ManagePhoto.php';
require './model/ManageComment.php';

// Instanciation des classes
$photo = new ManagePhoto();
$comment = new ManageComment();

// Traitement du formulaire
if(isset($_POST['submit'])) {
    if(isset($_POST['nom'])) {
        $nom = htmlspecialchars($_POST['nom']);
    } else {
        $nom = '';
    }
    
    if(isset($_POST['mail'])) { 
        $mail = htmlspecialchars($_POST['mail']);
    } else {
        $mail = '';
    }
    
    if(isset($_POST['message'])) { 
        $message = htmlspecialchars($_POST['message']);
    } else {
        $message = '';
    }
    
    $comment -> setComment($id, $nom, $mail, $message);

}


$info_photo = $photo->getPhotoInfos($id);

$list_comment = $comment -> getCommentList($id);

// Appel de la view
require './view/photo_view.php';