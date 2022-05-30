<?php

require_once 'Manage.php';

class ManagePhoto extends Manage {

    public function getPhotoList(int $id):object {
        return $this->getQuery("SELECT id, nom, legend FROM photo WHERE gallery_id='".$id."'");
    }
    
    public function getPhotoInfos(int $id):object {
        return $this->getQuery("SELECT id, nom, legend, gallery_id FROM photo WHERE id='".$id."'");
    }
    
}