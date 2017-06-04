<?php

mysql_connect("127.0.0.1", "root", "") or die (mysql_error());
mysql_select_db("revisao") or die (mysql_error());

$dia = substr($nasc, 0,2);
$mes = substr($nasc, 3,2);
$ano = substr($nasc, 6,4);
echo "  ".$dia."  ".$mes."   ".$ano;
$chak = checkdate($mes, $dia, $ano); 
echo " $chak";  
$nasc = $mes.$dia.$ano;
$sql = "INSERT INTO tbcliente (nome, ende, cpf, estado, nasc, sexo, cinema, musica, info, login, senha1, senha2)"
        . " VALUES ('$nome', '$ende', '$cpf', '$estado', '$nasc', '$sexo', '$cinema', '$musica','$info', '$login', '$senha1', '$senha2')";
mysql_query($sql) or die(mysql_error());

//Retorna o ultimo id
echo "Código= ".mysql_insert_id();

$res = mysql_query("SELECT * FROM tbcliente");

echo '<table border=1';
while ($registro = mysql_fetch_assoc($res)){
            $nome = $registro['nome'];
            $ende = $registro['ende'];
            $cpf = $registro['cpf'];
            $estado = $registro['estado'];
            $nasc = $registro['nasc'];
            $sexo = $registro['sexo'];
            $cinema = $registro['cinema'];
            $musica = $registro['musica'];
            $info = $registro['info'];
            $login = $registro['login'];
            $senha1 = $registro['senha1'];
            $senha2 = $registro['senha2'];
            echo "<tr><td>$nome"
            . "$ende $cpf $estado $nasc $sexo $cinema $musica $info $login $senha1 $senha2</td>";
}
echo '</table>';




?>

