<?php

// Récupération des paramètres

$page = '';

if(isset($_GET['page'])){
    $page = $_GET['page'];
}

if(isset($_GET['id'])){
    $id = intval($_GET['id']);
}
switch($page){
    case 'about' : 
        require './controller/about.php'; 
        break;
        
    case 'contact' : 
        require './controller/contact.php';
        break;
        
    case 'gallery_list' :
        require './controller/gallery.php';
        break;
        
    case 'gallery_view' :
        require './controller/gallery_view.php';
        break;
    
    case 'photo_view' :
        require './controller/photo_view.php';
        break;
        
    case 'admin' :
        require './controller/admin.php';
        break;
    
    default : 
        require './controller/home.php';
}

/*

<?php
require_once 'config/config.php';
require_once 'model/Manage.php';
$global = new Manage();

// Récupération des paramètres
$page = $_GET['page']?? '';
$id = $_GET['id']?? 0;


// Routeur
$global->router($page);
