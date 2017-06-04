<?php include_once 'connect.php'; ?>
<html>
    <head>

        <title>Mercado dos Sete Reinos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Estilos/Estilos.css"/>
        <link rel="shortcut icon" href="Imagens/WiC.png" type="image/png"/>
        <script>
            function mudaLogo1() {
                document.getElementById("Logo").src = " Imagens/Logo1.png";
            }

            function mudaLogo2() {
                document.getElementById("Logo").src = " Imagens/Logo2.png";
            }
        </script>

    </head>
    <body> 
        <div id="site">

            <div id="topo"><center><img src="Imagens/Logo1.png" title="Mercado dos Sete Reinos" id="Logo" onmousemove="mudaLogo2()" onmouseout="mudaLogo1()" /></center></div>

            <?php include_once 'menu2.php'; ?>
            <div id="homeconteudo2">
                <div id="posters">
                    
                    <br/>
                    <p align='justify'><center>Site em construção! Logo, logo, você estará pronto para a para a <b>Grande Guerra dos Tronos.</b></center></p>
                    <br/>
                    <br/>
                    <center><video width="640" height="360" controls><source src="Vídeos/Great Game.mp4" type="video/mp4"></video></center>
                </div>
            </div>
    </body>
</html>