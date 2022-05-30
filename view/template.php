<!doctype html>
<html lang="fr">
    
    <head>
        <meta charset="UTF-8">
        <title>Portfolio</title>
        <link rel="stylesheet" href="./public/css/styles.css" type="text/css" />
    </head>
    
    <body>
        <h1><?=$title?></h1>
        <header>
            <nav>
                <a href='index.php'>Accueil</a>
                <a href='index.php?page=about'>A propos</a>
                <a href='index.php?page=contact'>Contact</a>
                <a href='index.php?page=gallery_list'>Liste des galeries</a>
            </nav>
        </header>
    
        <main>
            <?=$content?>
        </main>
    
        <footer>
            Contenu copyright !
            <a href="?page=admin">ADMIN</a>
        </footer>
        
    </body>

</html>