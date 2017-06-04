<?php

$con = mysqli_connect("localhost", "root", "", "mercadodossetereinos") or die(mysqli_error());
//mysqli_select_db("mercadodossetereinos") or die(mysql_error());

//Retorna o ultimo id
//echo "Código= " . mysql_insert_id();
//if(mysql_query("SELECT Email FROM tbcliente WHERE Email = $email") == mysql_insert_id()) 
//echo "Seja bem-vinda ". mysql_query("SELECT Nome FROM tbcliente WHERE Codigo = mysql_insert_id()");
// $res = mysql_query("SELECT * FROM tbcliente WHERE Codigo = mysql_insert_id()");
 
 
 
// $res = mysql_query("SELECT * FROM tbcliente");
//
//echo '<table border=1';
//while ($registro = mysql_fetch_assoc($res)) {
//    $nome = $registro['nome'];
//    $ende = $registro['ende'];
//    $cpf = $registro['cpf'];
//    $estado = $registro['estado'];
//    $nasc = $registro['nasc'];
//    $sexo = $registro['sexo'];
//    $cinema = $registro['cinema'];
//    $musica = $registro['musica'];
//    $info = $registro['info'];
//    $login = $registro['login'];
//    $senha1 = $registro['senha1'];
//    $senha2 = $registro['senha2'];
//    echo "<tr><td>$nome"
//    . "$ende $cpf $estado $nasc $sexo $cinema $musica $info $login $senha1 $senha2</td>";
//}
//echo '</table>';
?>

