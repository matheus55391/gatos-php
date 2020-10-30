<!DOCTYPE html>
<!--https://github.com/matheus55391-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GATOS '-'</title>
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body> 
    <div class="container">
        <div class = "row">
            <div class="col-sm-12">
                <h1 class="titulo">GATOS '-'</h1>
            </div>  

            <div class="div-imagem col-sm-2 col-sm-offset-4 col-sm-offset-2">
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
                    echo "<a href="."."."><img class="."imagem img-thumbnail"." src=".$path.$gato."></a>";
                    
                ?>
            </div>
            <div class="col-sm-12">
                <a href="https://github.com/matheus55391"><h2>https://github.com/matheus55391</h2></a>
            </div>
        </div>
    </div>



</body>
</html>