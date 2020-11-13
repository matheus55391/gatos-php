<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
</head>
<body class="container">
    <header class="row">
        <nav class="col-md-12 navbar justify-content-center" id="hnav">
            <a class="navbar-brand" href="https://github.com/matheus55391" target="_blank">
                <span class="navbar-brand mb-0 h1">⠀⠀⠀GATOS '-'</span>
            </a>
        </nav>
    </header>
    <main  class="row">

        <div class="col-md maindiv" align="center ">
            <div >
                <a href="index.php">
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
                    echo "<img id = "."mainimg"." src=".$path.$gato." class="."img-fluid".">";     
                ?>
                    
 
                </a><br>
                <span>TRY CLICK</span>
            </div>            
        </div>
    </main>
    <footer class="row page-footer font-small blue fixed-bottom">
        <div class="col-md footer-copyright text-center py-3">© 2020:
            <a href="https://github.com/matheus55391" target="_blank">Meguinha</a>
        </div>
    </footer>
</body>
</html>
