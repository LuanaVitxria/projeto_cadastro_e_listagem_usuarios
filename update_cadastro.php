<?php

//incluir o arquivo de conexão com o banco de dados
include "database.php";

//resgatar as informações enviadas via formulário que estão contidas dentro do campo NAME

$id_login = $_POST['id_login'];
$login_user = $_POST['login_user'];
$login_password = $_POST['login_password'];
$login_email = $_POST['login_email'];
$login_tel = $_POST['login_tel'];

//contruir a string em SQL para atualizar o cadastro
$sql_update = "UPDATE bookshop SET login_user = '$login_user', login_password = '$login_password', login_email = '$login_email', login_tel =  '$login_tel'
WHERE bookshop.id_login = '$id_login'";


// echo $sql_update;
if(mysqli_query($conexao, $sql_update)){
    header("Location: listar_usuarios.php");
}
else
{
    echo "Falha ao atualizar cadastro";
}
