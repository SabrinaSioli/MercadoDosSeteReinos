<html>
    <head>
        <title>Mercado dos Sete Reinos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Estilos/Estilos.css"/>
        <link rel="shortcut icon" href="Imagens/WiC.png" type="image/png"/>
        <script src="JavaScript/javascript.js" type="text/javascript"></script>
        <link href="Slider/slider.css" rel="stylesheet" type="text/css"/>

        <script>
            alert("Bem-vindo ao MERCADO DOS SETE REINOS!");
        </script>

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

            <div id="menu">
                <ul>
                    <li><a href="http://localhost/MercadoDosSeteReinos/index.html" title="Home">Home</a></li>
                    <li><a href="http://localhost/MercadoDosSeteReinos/Menu/Livros/index.html" title="Livros">Livros</a></li>
                    <li><a href="http://localhost/MercadoDosSeteReinos/Menu/M%C3%ADdia/index.html" title="Mídia">Mídia</a></li>
                    <li><a href="http://localhost/MercadoDosSeteReinos/Menu/Roupas/index.html" title="Roupas">Roupas</a></li>
                    <li><a href="http://localhost/MercadoDosSeteReinos/Menu/Acess%C3%B3rios/index.html" title="Acessórios">Acessórios</a></li>
                    <li><a href="http://localhost/MercadoDosSeteReinos/Menu/Posters/index.html" title="Posters">Posters</a></li>
                    <li><a href="http://localhost/MercadoDosSeteReinos/Menu/Cadastro/index.html" title="Cadastro">Cadastro</a></li>
                    <li><a href="http://localhost/MercadoDosSeteReinos/Menu/Sobre/index.html" title="Sobre">Sobre</a></li>
                </ul>
            </div>

            <div id="homeconteudo">
                <?php
                $nome = $_POST['name'];
                $dia = $_POST['dia'];
                $mes = $_POST['mes'];
                $ano = $_POST['ano'];
                $rg = $_POST['rg'];
                $cpf1 = $_POST['cpf'];
                $cpf2 = $_POST['cpf2'];
                $rua = $_POST['rua'];
                $numero = $_POST['numero'];
                $bairro = $_POST['bairro'];
                $estado = $_POST['estado'];
                $cidade = $_POST['cidade'];
                $cep1 = $_POST['cep'];
                $cep2 = $_POST['cep2'];
                $email = $_POST['email'];
                $senha = $_POST['pass'];
                $confirmacao = $_POST['passconfirm'];

                $camposOK = true;

                if ($senha != $confirmacao) {
                    echo 'As senha nÃ£o sÃ£o iguais<br>';
                    $camposOK = false;
                }

                $data = "$ano-$mes-$dia";

                $cep = $cep1 . $cep2;
                $cpf = $cpf1 . $cpf2;


                include_once './connect.php';

                $sql = "INSERT INTO tbcliente VALUES ('$nome', '$data','$cpf', '$cidade', '$estado','$email', 0, '$rg', '$numero', '$bairro', '$cep', '$senha', '$rua')";
                mysqli_query($con, $sql) or die(mysqli_error());
                echo '<script>
            alert("Cadastro realizado com sucesso!");
        </script>';
//echo "Seja bem-vinda ". mysql_query("SELECT Nome FROM tbcliente WHERE Codigo = ".mysql_insert_id().")";

                /* if ($camposOK) {
                  echo '<table border = "0" cellpadding="5">';
                  echo '<tr><td>Nome:</td><td><b>', $nome, '</b></td></tr>';
                  echo '<tr><td>CPF:</td><td><b>', $cpf, '</b></td></tr>';
                  echo '<tr><td>EndereÃ§o:</td><td><b>', $ender, '</b></td></tr>';
                  echo '<tr><td>Estado:</td><td><b>', $estado, '</b></td></tr>';
                  echo '<tr><td>Data de nasc.:</td><td><b>', $dtNasc, '</b></td></tr>';
                  echo '<tr><td>Sexo:</td><td><b>', $sexo, '</b></td></tr>';
                  echo '<tr><td>Login:</td><td><b>', $login, '</b></td></tr>';
                  echo '<tr><td>Senha:</td><td><b>', $senha1, '</b></td></tr>';

                  echo '<tr><td>Áreas de interesse: </td><td><b>';
                  }
                 */
                ?>  
            </div>
        </div>
    </body>
</html>