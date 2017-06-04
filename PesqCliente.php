<html>
    <head>

        <title>Mercado dos Sete Reinos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Estilos/Estilos.css"/>
        <link rel="shortcut icon" href="Imagens/WiC.png" type="image/png"/>
        <link href="Slider/slider.css" rel="stylesheet" type="text/css"/>
        <script src="JavaScript/javascript.js" type="text/javascript"></script>



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
                </br>   
                <h1><center>Pesquisar</center></h1>

                <center><form action="PesqCliente.php" method="POST">
                        Tipo:  
                        <select name="ComboTipo">
                            <option value="0">Todos</option>
                            <option value="1" >Nome</option>
                            <option value="2">Email</option>
                            <option value="3">Código</option>
                            <option value="4">Data</option>
                        </select>
                        <input type="text"  name="pesq">
                        <input type="submit" value="Pesquisar" name="btnpesq">
                    </form>
                </center>
                </br>
                </br>
                <?php
                include_once 'connect.php';
//Pesquisar Cliente php
                if (isset($_POST['ComboTipo'])) {
                    $tipo = $_POST['ComboTipo'];
                    $pesq = $_POST['pesq'];

                    //Montar o SQL para pesquisar
                    include_once ('connect.php');
                    $sql = "SELECT * FROM tbcliente ";

                    if ($tipo == 0) {
                        $query = $sql;
                        //Tabela
                        $res = mysqli_query($con ,$query) or die("ERRO ao pesquisar dados do Cliente" . mysqli_error());

                        echo '<div id="table"><center><table style="color: white" border="1">';
                        echo '<tr><td>Nome</td><td>Código</td><td>CPF</td><td>RG</td><td>Data</td><td>E-mail</td>'
                        . '<td>Cep</td><td>Estado</td><td>Cidade</td><td>Bairro</td><td>Rua</td><td>Número</td><td>Senha</td>';

                        while ($registro = mysqli_fetch_assoc($res)) {
                            $nome = $registro['Nome'];
                            $data = $registro['date'];
                            $cpf = $registro['Cpf'];
                            $estado = $registro['Estado'];
                            $email = $registro['Email'];
                            $cod = $registro['Codigo'];
                            $rg = $registro['rg'];
                            $numero = $registro['numero'];
                            $bairro = $registro['bairro'];
                            $cep = $registro['cep'];
                            $senha = $registro['senha'];
                            $rua = $registro['rua'];
                            $cidade = $registro['Cidade'];
                            echo "<tr><td>$nome</td><td>$cod</td><td>$cpf</td><td>$rg</td><td>$data</td><td>$email</td><td>$cep"
                            . "</td><td>$estado</td><td>$cidade</td><td>$bairro</td><td>$rua</td><td>$numero</td><td>$senha</td></tr>";
                        }
                        echo '</table></div>';

                        //1
                    } else if ($tipo == 1) {
                        $query = $sql . "WHERE Nome LIKE '%$pesq%' ORDER BY Nome ASC";

                        //Tabela
                        $res = mysqli_query($con ,$query) or die("ERRO ao pesquisar dados do Cliente" . mysqli_error());

                        echo '<div id="table"><center><table style="color: white" border="1">';
                        echo '<tr><td>Nome</td><td>Código</td><td>CPF</td><td>RG</td><td>Data</td><td>E-mail</td>'
                        . '<td>Cep</td><td>Estado</td><td>Cidade</td><td>Bairro</td><td>Rua</td><td>Número</td><td>Senha</td>';

                        while ($registro = mysqli_fetch_assoc($res)) {
                            $nome = $registro['Nome'];
                            $data = $registro['date'];
                            $cpf = $registro['Cpf'];
                            $estado = $registro['Estado'];
                            $email = $registro['Email'];
                            $cod = $registro['Codigo'];
                            $rg = $registro['rg'];
                            $numero = $registro['numero'];
                            $bairro = $registro['bairro'];
                            $cep = $registro['cep'];
                            $senha = $registro['senha'];
                            $rua = $registro['rua'];
                            $cidade = $registro['Cidade'];
                            echo "<tr><td>$nome</td><td>$cod</td><td>$cpf</td><td>$rg</td><td>$data</td><td>$email</td><td>$cep"
                            . "</td><td>$estado</td><td>$cidade</td><td>$bairro</td><td>$rua</td><td>$numero</td><td>$senha</td></tr>";
                        }
                        echo '</table></div>';

                        //2
                    } elseif ($tipo == 2) {
                        $query = $sql . "WHERE Email LIKE '%$pesq%' ORDER BY Email ASC";

                        $res = mysqli_query($con ,$query) or die("ERRO ao pesquisar dados do Cliente" . mysqli_error());

                        echo '<div id="table"><center><table style="color: white" border="1">';
                        echo '<tr><td>E-mail</td><td>Nome</td><td>Código</td><td>CPF</td><td>RG</td><td>Data</td>'
                        . '<td>Cep</td><td>Estado</td><td>Cidade</td><td>Bairro</td><td>Rua</td><td>Número</td><td>Senha</td>';

                        while ($registro = mysqli_fetch_assoc($res)) {
                            $nome = $registro['Nome'];
                            $data = $registro['date'];
                            $cpf = $registro['Cpf'];
                            $estado = $registro['Estado'];
                            $email = $registro['Email'];
                            $cod = $registro['Codigo'];
                            $rg = $registro['rg'];
                            $numero = $registro['numero'];
                            $bairro = $registro['bairro'];
                            $cep = $registro['cep'];
                            $senha = $registro['senha'];
                            $rua = $registro['rua'];
                            $cidade = $registro['Cidade'];
                            echo "<tr><td>$email</td><td>$nome</td><td>$cod</td><td>$cpf</td><td>$rg</td><td>$data</td><td>$cep"
                            . "</td><td>$estado</td><td>$cidade</td><td>$bairro</td><td>$rua</td><td>$numero</td><td>$senha</td></tr>";
                        }
                        echo '</table></div>';
                        //3
                    } elseif ($tipo == 3) {
                        $query = $sql . "WHERE Codigo LIKE '%$pesq%' ORDER BY Codigo ASC";

                        $res = mysqli_query($con ,$query) or die("ERRO ao pesquisar dados do Cliente" . mysqli_error());

                        echo '<div id="table"><center><table style="color: white" border="1">';
                        echo '<tr><td>Código</td><td>Nome</td><td>CPF</td><td>RG</td><td>Data</td><td>E-mail</td>'
                        . '<td>Cep</td><td>Estado</td><td>Cidade</td><td>Bairro</td><td>Rua</td><td>Número</td><td>Senha</td>';

                        while ($registro = mysqli_fetch_assoc($res)) {
                            $nome = $registro['Nome'];
                            $data = $registro['date'];
                            $cpf = $registro['Cpf'];
                            $estado = $registro['Estado'];
                            $email = $registro['Email'];
                            $cod = $registro['Codigo'];
                            $rg = $registro['rg'];
                            $numero = $registro['numero'];
                            $bairro = $registro['bairro'];
                            $cep = $registro['cep'];
                            $senha = $registro['senha'];
                            $rua = $registro['rua'];
                            $cidade = $registro['Cidade'];
                            echo "<tr><td>$cod</td><td>$nome</td><td>$cpf</td><td>$rg</td><td>$data</td><td>$email</td><td>$cep"
                            . "</td><td>$estado</td><td>$cidade</td><td>$bairro</td><td>$rua</td><td>$numero</td><td>$senha</td></tr>";
                        }
                        echo '</table></div>';
                        //4
                    } elseif ($tipo == 4) {
                        $query = $sql . "WHERE date LIKE '%$pesq%' ORDER BY date ASC";

                        $res = mysqli_query($con,$query) or die("ERRO ao pesquisar dados do Cliente" . mysqli_error());

                        echo '<div id="table"><center><table style="color: white" border="1">';
                        echo '<tr><td>Data</td><td>Nome</td><td>Código</td><td>CPF</td><td>RG</td><td>E-mail</td>'
                        . '<td>Cep</td><td>Estado</td><td>Cidade</td><td>Bairro</td><td>Rua</td><td>Número</td><td>Senha</td>';

                        while ($registro = mysqli_fetch_assoc($res)) {
                            $nome = $registro['Nome'];
                            $data = $registro['date'];
                            $cpf = $registro['Cpf'];
                            $estado = $registro['Estado'];
                            $email = $registro['Email'];
                            $cod = $registro['Codigo'];
                            $rg = $registro['rg'];
                            $numero = $registro['numero'];
                            $bairro = $registro['bairro'];
                            $cep = $registro['cep'];
                            $senha = $registro['senha'];
                            $rua = $registro['rua'];
                            $cidade = $registro['Cidade'];
                            echo "<tr><td>$data</td><td>$nome</td><td>$cod</td><td>$cpf</td><td>$rg</td><td>$email</td><td>$cep"
                            . "</td><td>$estado</td><td>$cidade</td><td>$bairro</td><td>$rua</td><td>$numero</td><td>$senha</td></tr>";
                        }
                        echo '</table></div>';
                    }
                }
                ?>
                </hr>
                </br>
                <center>
                    <h1><center>Deletar</center></h1>
                    <form action="DeletarCliente.php" method="POST">
                        Digite o código do cliente a ser deletado: <input type="text" placeholder="Ex:01" name="Deletar">
                        <input type="submit" value="Deletar" >
                    </form>
                </center>
                </br>
                </br>
                </hr>
                </br>
                <center>
                    <h1><center>Atualizar</center></h1>
                    <form action="UpdateCliente.php" method="POST"> 
                        <fieldset>
                            <table cellspacing="10">
                                <tr>
                                    <td>
                                        <label style="color: white" for="nome">Digite o código do cliente que deseja modificar os dados: </label>
                                        <input id="chaveprimaria" name="chaveprimaria" type="text"  required /> 
                                    </td>
                            </table>
                        </fieldset> 
                        <center><h4 style="color: red">Preencha apenas os campos a serem atualizados</h4></center>
                        <!-- DADOS PESSOAIS-->
                        <fieldset>
                            <legend style="color: white">Dados Pessoais</legend>
                            <table cellspacing="10">
                                <tr>
                                    <td>
                                        <label style="color: white" for="nome">Nome: </label>
                                        <input id="nome" name="name" type=text title="Preencha o campo Nome" /> 
                                    </td>
                                    <td align="left">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="color: white">Nascimento: </label>
                                    </td>
                                    <td align="left">
                                        <input type="text" name="dia" size="2" maxlength="2" value="dd" > 
                                        <input type="text" name="mes" size="2" maxlength="2" value="mm" > 
                                        <input type="text" name="ano" size="4" maxlength="4" value="aaaa" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="color: white" for="rg">RG: </label>
                                    </td>
                                    <td align="left">
                                        <input name="rg" type="text" id="RG" title="Preencha o campo RG" > 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="color: white">CPF:</label>
                                    </td>
                                    <td align="left">
                                        <input name="cpf" type="text" id="CPF" title="Preencha o campo CPF" size="9"> - <input type="text" name="cpf2" size="2" maxlength="2">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>

                        <br />
                        <!-- ENDEREÇO -->
                        <fieldset>
                            <legend style="color: white">Dados de Endereço</legend>
                            <table cellspacing="10">

                                <tr>
                                    <td>
                                        <label style="color: white" for="rua">Rua:</label>
                                    </td>
                                    <td align="left">
                                        <input name="rua" type="text" id="Rua" title="Preencha o campo Rua">
                                    </td>
                                    <td>
                                        <label style="color: white" for="numero">Numero:</label>
                                    </td>
                                    <td align="left">
                                        <input name="numero" type="text" id="Numero" title="Preencha o campo Numero" size="4">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="color: white" for="bairro">Bairro: </label>
                                    </td>
                                    <td align="left">
                                        <input name="bairro" type="text" id="Bairro" title="Preencha o campo Bairro" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="color: white" for="estado">Estado:</label>
                                    </td>
                                    <td align="left">
                                        <select name="estado">
                                            <option value=""></option>
                                            <option value="ac">Acre</option> 
                                            <option value="al">Alagoas</option> 
                                            <option value="am">Amazonas</option> 
                                            <option value="ap">Amapá</option> 
                                            <option value="ba">Bahia</option> 
                                            <option value="ce">Ceará</option> 
                                            <option value="df">Distrito Federal</option> 
                                            <option value="es">Espírito Santo</option> 
                                            <option value="go">Goiás</option> 
                                            <option value="ma">Maranhão</option> 
                                            <option value="mt">Mato Grosso</option> 
                                            <option value="ms">Mato Grosso do Sul</option> 
                                            <option value="mg">Minas Gerais</option> 
                                            <option value="pa">Pará</option> 
                                            <option value="pb">Paraíba</option> 
                                            <option value="pr">Paraná</option> 
                                            <option value="pe">Pernambuco</option> 
                                            <option value="pi">Piauí</option> 
                                            <option value="rj">Rio de Janeiro</option> 
                                            <option value="rn">Rio Grande do Norte</option> 
                                            <option value="ro">Rondônia</option> 
                                            <option value="rs">Rio Grande do Sul</option> 
                                            <option value="rr">Roraima</option> 
                                            <option value="sc">Santa Catarina</option> 
                                            <option value="se">Sergipe</option> 
                                            <option value="sp">São Paulo</option> 
                                            <option value="to">Tocantins</option> 
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="color: white" for="cidade">Cidade: </label>
                                    </td>
                                    <td align="left">
                                        <input name="cidade" type="text" id="Cidade" title="Preencha o campo Cidade">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="color: white" for="cep">CEP: </label>
                                    </td>
                                    <td align="left">
                                        <input type="text" id="CEP" title="Preencha o campo CEP" name="cep" size="5" maxlength="5"> - <input type="text" name="cep2" size="3" maxlength="3">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                        <br />

                        <!-- DADOS DE LOGIN -->
                        <fieldset>
                            <legend style="color: white">Dados de login</legend>
                            <table cellspacing="10">
                                <tr>
                                    <td>
                                        <label style="color: white" for="email">E-mail: </label>
                                    </td>
                                    <td align="left">
                                        <input type="text" id="E-mail" title="Preencha o campo E-mail" name="email">
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <label style="color: white" for="pass">Senha: </label>
                                    </td>
                                    <td align="left">
                                        <input type="password" id="Senha" title="Preencha o campo Senha" name="pass">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="color: white" for="passconfirm">Confirme a senha: </label>
                                    </td>
                                    <td align="left">
                                        <input type="password" id="Confirm" title="Preencha o campo Confirme a senha" name="passconfirm">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="color: white" for="passconfirm">Código: </label>
                                    </td>
                                    <td align="left">
                                        <input type="text" id="Email" title="Preencha o campo Codigo" name="chaveprimaria">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                        <br />
                        <input type="submit" value="Atualizar">
                        <input type="reset" value="Limpar">
                    </form>
                </center>
            </div>
        </div>
    </body>
</html>