<?php

include "header.php";
?>

<h3>Formulário de Cadastro de Clientes</h3>
<p>Obrigatório o preenchimento de todos os campos</p>
<br>
<div class="formulario">

<form action="cadastro.php" method="post">
    <label for="nome_nome">Login </label>
    <input type="text" name="login_user" id="login_user" placeholder="Informe seu login"><br><br>

    <label for="login_password">Senha:</label>
    <input type="password" name="login_password" id="login_password" placeholder="Digite sua senha"><br><br>

    <label for="celular_aluno">Celular: </label>
    <input type="text" name="login_tel" id="login_tel" placeholder="Informe o número do seu celular"><br><br>

    <label for="aluno_email">E-mail: </label>
    <input type="email" name="login_email" id="login_email" placeholder="Informe o seu e-mail:"><br><br>

    <input type="submit" value="Efetivar Cadastro">
</form>
</div>

<?php

include "footer.php";
?> 