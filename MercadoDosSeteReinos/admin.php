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
                <center><div><table><tr><td style="font-size: 100px; color: black"><b>Bem Vindo!</b></td></tr></table></div></center>
                <div id="center"><center>oi</center></div>
            </div>
        </div>
    </body>
</html>