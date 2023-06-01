<div class="default">

    <?php

    include "header.php";

    // session_start();

    if(isset($_SESSION['usuario'])){
        $usuario = $_SESSION['usuario'];
    } else {
        $usuario = null;
    }

    if(!isset($usuario) || $usuario['perfil'] != "admin"){
        echo "Você não tem permissão de acesso.";
    }


    else{
        ?>
    <?php } ?>


    <section class="container">
            <div class="text_painel">
            <h1>Fox Bookshop</h1>
            <h3>Painel administrativo</h3></div>
            <div class= "cards_painel">
                <div class= "card_cadastro">
                <li><a href="form_cadastro.php">Cadastro</a></li></div>
                <div class = "card_listar"><li><a href="listar_usuarios.php">Listagem</a></li></div>
                <div class = "card_sair"><li><a href="index.php">Sair</a></li></div>
            </div>
        </section>

    <?php

    include "footer.php";
    ?>
</div>