<?php

require_once 'Manage.php';

class ManageGallery extends Manage {

    public function getGalleryList():object {
        return $this->getQuery("SELECT id, title, description FROM gallery");
    }
    
    public function getGalleryInfos(int $id):object {
        return $this->getQuery("SELECT id, title, description FROM gallery WHERE id='".$id."'");
    }
    
    public function deleteGallery(int $id):object {
        $this->getQuery("DELETE FROM gallery WHERE id='".$id."'");
    }
    
    public function createGallery(string $nom,string $description):object {
        $this->getQuery("INSERT INTO gallery SET name='".$nom."', description='".$description."'");
    }
}