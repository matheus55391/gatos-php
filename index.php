<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<a href="." id="card">
    <div id="card">
        <h1>Gatos '-'</h1>
        <?php
            function getcat($files){
                return $files[rand(1, count($files) - 3)];
            }
            //diretorio onde fica as imagens
            $path = "assets/gatos/";
            //adicionar todas as imagens da pasta a uma lista_arrey de strings
            //escolher uma aleatoriamente
            $files = scandir($path, 1);

            $gato = getcat($files);
            echo "<img class="."card-img"." src=".$path.$gato.">";      
        ?>
    </div>
</a>
</body>
</html>