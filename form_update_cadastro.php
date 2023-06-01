<?php
 //1º incluir o arquivo de conexao com o banco de dados
    include "database.php";
    //o header é para carregar as configurações em html e css no site
    include "header.php";
    //2º resgatar o ID enviado via GET
    //3º declarando uma variável para receber o camando em sql
    $id_login = $_GET['id_login'];
    $sql = "SELECT * FROM bookshop WHERE bookshop.id_login = '$id_login'";


    //3º utilizar a funlão mysqli_query, conectar com o banco e executar o comando em sql
    //é necessário armazenar o resultado em uma variável
    $resultado = mysqli_query($conexao, $sql);
    // 4º converter o resultado da pesquisa em um array associativo
    $dados = mysqli_fetch_array($resultado);

?>

<h3>Atualização do cadastro dos Clientes</h3>
<p>Obrigatório o preenchimento de todos os campos</p>
<br>
<div class="formulario">

<form action="update_cadastro.php" method="post">
    <input type="hidden" name="id_login" value="<?php echo $dados['id_login']; ?>">
    <label for="login_user">Login </label>
    <input type="text" name="login_user" id="login_user" value="<?php echo $dados['login_user']; ?>" placeholder="Informe seu login"><br><br>

    <label for="login_password">Senha:</label>
    <input type="password" name="login_password" id="login_password" placeholder="Digite sua senha"><br><br>

    <label for="aluno_email">E-mail: </label>
    <input type="email" name="login_email" id="login_email" placeholder="Informe o seu e-mail:"><br><br>

    <label for="celular_aluno">Celular: </label>
    <input type="text" name="login_tel" id="login_tel" placeholder="Informe o número do seu celular"><br><br>
    
    <input type="submit" value="Efetivar Cadastro">
</form>
</div>

<?php

include "footer.php";
?>