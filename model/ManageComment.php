<?php
// Je récupère ma classe parente
require_once 'Manage.php';
    
// Je crée ma nouvelle classe
class ManageComment extends Manage {
    
// Je crée une methode pour récupérer la liste des commentaires
    public function getCommentList(int $id):object {
        $data = ['id'=>intval($id)];
        $query = "SELECT comment, author, mail FROM comment WHERE photo_id=:id";
        return $this->getQuery($query, $data);
    }
    
    public function setComment(int $id, string $nom, string $mail, string $message):void {
        $data=[
            'comment'=>$message,
            'author'=>$nom,
            'mail'=>$mail,
            'photo_id'=>$id
        ];
        $query = "INSERT INTO comment (comment,author,mail,valid,photo_id) VALUES ( :comment, :author, :mail,0,:photo_id)";
        
        $this->getQuery($query, $data);
    }
    
}