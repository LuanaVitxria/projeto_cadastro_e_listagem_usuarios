<?php

$servidor = "localhost";
$servidor_user = "root";
$servidor_password = "";
$database_name = "bookshop";

$conexao = mysqli_connect($servidor, $servidor_user, $servidor_password, $database_name);

//Declaração de variáveis
//Atribuído os valores necessários para acessar a base de dados

// $servidor="localhost:8080";
// $servidor_user="root";
// $servidor_password="";
// $database_name="sge";

// //Declarar uma variável para receber a função de conexão com banco
// //A função mysqli_connect necessita de 4 parâmetros
// $conexao = mysqli_connect($servidor, $servidor_user, $servidor_password, $database_name);

// //utilização da função de forma direta sem o uso de variáveis
// $conexao = mysqli_connect("localhost:8080", "root", "", "sge");

//declaração de constante 
// define('SERVIDOR', 'localhost');
// define('SERVIDOR_USER', 'root');
// define('SERVIDOR_PASSWORD', '');
// define('DATABASE', 'sge');

// $conexao = mysqli_connect(SERVIDOR,SERVIDOR_USER,SERVIDOR_PASSWORD,DATABASE);

?>  