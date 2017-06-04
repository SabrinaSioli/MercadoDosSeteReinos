
<?php
$email = $_POST['email'];
$senha = $_POST['pass'];
if ($email == 'sabrina.sioly@gmail.com' && $senha == '123') {
    include_once 'connect.php';
    echo "<script language= 'JavaScript'>location.href='admin.php'</script>";
}else{
    echo "<script language= 'JavaScript'>alert('Email ou senha erradas')</script>";
    echo "<script language= 'JavaScript'>location.href='Menu/Cadastro/login.html'</script>";
}