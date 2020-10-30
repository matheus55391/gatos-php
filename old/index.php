<!DOCTYPE html>
<!--https://github.com/matheus55391-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GATOS '-'</title>
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>  
    <div class="centro">
        <h1 class="titulo">GATOS '-'</h1>
        <div class="div-imagem">
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
                echo "<a href="."."."><img class="."imagem"." src=".$path.$gato."></a>";
                
            ?>
        </div>
    </div>


</body>
</html>