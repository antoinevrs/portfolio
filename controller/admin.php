<?php

session_start();

// Déconnexion
if(isset($_GET['deconex'])){
    unset($_SESSION);
    session_destroy();
}

// Gestion du formulaire
if(isset($_POST['submit']) && $_POST['submit']=='go') {
    if($_POST['name']=='Antoine' && $_POST['pwd']=='motdepasse'){
        $auth = '<h2> Identification réussie </h2>';
        $_SESSION['Auth'] = true ;
        $_SESSION['name'] = $_POST['name'];
    } else {
        $auth ='<h2> Identification Incorrecte ! </h2>';
    }
}

// Contrôle de l'identification
if(!isset($_SESSION['Auth']) || !$_SESSION['Auth']){
    require './view/admin/login.php';
    exit;
}


if(isset($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action ='';
}


if(isset($_GET['do'])){
    $action = $_GET['do'];
} else {
    $do = '';
}


if(isset($_GET['id'])){
    $action = intval($_GET['id']);
} else {
    $id = 0;
}


    
switch($action) {
    case 'gallery' : adminGallery($do, $id);
    break;
    
    case 'photo' : adminPhoto();
    break;
    
    case 'comment' : adminComment();
    break;
    
    default : adminHome();
}
    
    



function adminGallery($do='', $id=0){
    require './model/ManageGallery.php';
    $gal = new ManageGallery();
   
   // Traitement de mon formulaire de création
   if(isset($_POST['submit']) && $_POST['submit']=='Enregistrer'){
       $gal->createGallery($_POST['gal_name'], $_POST['gal_description']);
       
       
       
       
   }
   
    if(isset($do)) {
        switch($do) {
            case 'delete' : $gal->deleteGalleryList();
                break;
                
            case 'modify' : $bouton = 'Modifier';
            $gal_info = getGalleryInfos($id);
                break;
                
            case 'create' : $bouton = 'Enregistrer';
        }
    }
    
    
    
    $liste = $gal->getGalleryList();
    require './view/admin/gallery.php';
}


function adminPhoto(){
    
}

function adminComment(){
    
}

function adminHome($auth=''){
    require './view/admin/home.php';
}