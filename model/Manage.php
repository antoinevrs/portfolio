<?php

class Manage {
    
    protected function db_connect() {
        $server ='db.3wa.io' ;
        $login ='antoinevarais' ;
        $pwd ='a5a2d13079fc99f1dd09bcc8b8ec8e07' ;
        $base ='antoinevarais_portfolio' ;
        
        try {
            $db = new PDO('mysql:host='.$server.';port=3306;dbname='.$base.';charset=utf8', $login, $pwd);    
        }
        catch (PDOException $e) {
            echo '<h3>Site en maintenance...</h3>';
            echo $e->getMessage();
            exit;
        }
        return $db;
    }
    
    protected function getQuery($query, $data=[]){
        $db = $this->db_connect();
        $stmt = $db -> prepare($query);
        $stmt -> execute($data);
        return $stmt;
    }
    
}

/*
<?php

class Manage {
    
    protected function db_connect() {
        try {
        	$db = new PDO('mysql:host='.SERVER.';port=3306;dbname='.BASE.';charset=utf8', LOGIN, PWD);	
        }
        catch (PDOException $e) {
        	echo '<h3>Site en maintenance...</h3>';
        	echo $e->getMessage();
        	exit;
        }
        return $db;
    }
    
    protected function getQuery($query,$data = []) {
        $db = $this->db_connect();
        $stmt = $db->prepare($query);
        $stmt->execute($data);
        return $stmt;
    }
    
    public function router(string $page):void {
        if(in_array($page, array_keys(ROUTES))) {
            $controller = CONTROLLER_FOLDER.ROUTES[$page];
        } else{
            $controller = CONTROLLER_FOLDER.DEFAULT_ROUTE;
        }
        require realpath($controller);
    }
    
}