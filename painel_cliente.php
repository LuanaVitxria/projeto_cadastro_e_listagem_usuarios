<div class="default">
    <?php
    
    include "header.php";
    
    // session_start();
    
    
    if(isset($_SESSION['usuario'])){
        $usuario = $_SESSION['usuario'];
    } else {
        $usuario = null;
    }
    
    
    if(!isset($usuario['perfil']) || $usuario['perfil'] != "cliente"){
        echo "Você não tem permissão de acesso.";
    }
    
    
    
    else{
        ?>
    <?php } ?>
    
    
    <section class="cards_info">
            <div class="text_painel"></div>
            <h1>Fox Bookshop</h1>
            <h3>Painel do Cliente</h3>
            <div class= "cards_painel">
                <div class = "card_listar"><li><a href="listar_usuarios.php">Listagem</a></li></div>
                <div class = "card_sair"><li><a href="index.php">Sair</a></li></div>
            </div>
        </section>
    
        <?php include "footer.php"; ?>
</div>

