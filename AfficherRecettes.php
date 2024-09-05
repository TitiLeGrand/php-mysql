<?php
// Déclaration du tableau des recettes
$recipes = [
[
    'title'=>'Cassoulet',
    'recipe'=>'[...]',
    'author'=>'mickael.andrieu@exemple.com',
    'is_enabled'=>true,],
[
    'title'=>'Couscous',
    'recipe'=>'[...]',
    'author'=>'mickael.andrieu@exemple.com',
    'is_enabled'=>false,],
];
?>


<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
</head>
<body>
    <ul>

    <?php 
    echo('<h1>Affichage des recettes</h1>');
    foreach($recipes as $recipe) {
        if ($recipe['is_enabled'] == true){
            echo '<h2>',$recipe['title'],'</h2>',$recipe['recipe'],'<br><em>',$recipe['author'],'</em>';
        }
        
    }?>
        
    </ul>
</body>
</html>