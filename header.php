<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Livraria</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="sub-header">
                <div class="logo">
                    <a href="index.php"><img src="images/fox_book.png" alt="logo_livraria"></a>
                </div>
    
                <div class="barra_pesquisa">
                    <input type="text" name="pesquisa" placeholder="Faça aqui sua pesquisa">
                    <button type="submit"><img src="images/search1.png" alt="pesquisa"></button>
                </div>
    
                    <div class="sign-in">
                    <?php 
                            session_start();

                            if(!isset($_SESSION['usuario'])){
                        ?>
                            <form action="login_user.php" method="post">
                                <input type="text" name="login_user" id="login_user" placeholder="Informe seu login">
                                <input type="password" name="password_user" id="password_user" placeholder="Informe sua senha">
                                <button type="submit">Entrar</button>
                            </form>
                            <p><a href="#">Esqueci a senha</a></p>
                            <p><a href="form_cadastro.php">Cadastre-se</a></p>
                            <?php
                                //iniciar a sessão em php
                                if(isset($_SESSION['mensagem'])){
                                    $msg = $_SESSION['mensagem'];
                                    echo "<p>" .$msg. "</p>";
                                    unset($_SESSION['mensagem']);
                                }
                            } else {
                            ?>

                            <form action="logout.php" method="post">
                                <button type="submit">Sair</button>
                            </form>
                        <?php 
                            }
                        ?>
                    </div>
            </div>
    
            <navbar class="menu_navegacao"> <!-- tag responsável pelo menu navegação -->
                <div class="selecionar-categoria">
                    <a href="categorias">Pesquisa de Categorias</a>
                </div>

                <ul><!-- inicia uma lista não ordenada com dotes -->
                    <li><a href="index.php">Home</a></li>
    
                    <li><a href="lancamentos.php">Lançamentos</a></li><!-- tópico de cada linha -->
    
                    <li><a href="mais_vendidos.php">Mais vendidos</a></li>
    
                    <li><a href="recomendados.php">Recomendados</a></li>
    
                    <li><a href="autores_populares.php">Autores populares</a></li>
    
                    <li><a href="livros_por_idioma.php">Livro por idioma</a></li>
                <!-- tag <a> é responsável pelos links, o href é a referência local que o link irá ser direcionado(?) -->
                </ul>
            </navbar>
        </div>
    </header>