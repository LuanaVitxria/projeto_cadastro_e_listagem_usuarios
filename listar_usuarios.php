<div class="default">
    <?php
        //1º incluir o arquivo de conexao com o banco de dados
        include "database.php";
        //o header é para carregar as configurações em html e css no site
        include "header.php";

        //2º declarando uma variável para receber o camando em sql
        $sql = "SELECT * FROM bookshop";

        //3º utilizar a funlão mysqli_query, conectar com o banco e executar o comando em sql
        //é necessário armazenar o resultado em uma variável
        $resultado = mysqli_query($conexao, $sql);
    
    ?>



    <div class="section">
        <table>
            <!-- Cabeçalho da tabela -->
        <thead>
            <!-- tr = table row - linha da tabela -->
            <tr>
                <!-- th = o nome que vai no índice de cada coluna    -->
                <th>Login </th>
                <th>E-mail </th>
                <th>Celular </th>
                <th>Usuário</th>
                <th>Atualizar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <!-- Corpo da tabela -->
        <tbody>
                <!-- tr = insere uma linha na tabela -->
                <!-- td = table data - Campo para receber o valor -->
                <!-- A função mysqli_fetch_assoc - converte a consulta do banco de dados em um array
                    associativo, permitindo o seu acesso pelo nome do campo da tabela -->
                <?php while($dados = mysqli_fetch_array($resultado)): ?>
        
                    <tr class="icons">
                    <td><?php echo $dados['login_user']; ?></td>
                    <td><?php echo $dados['login_email']; ?></td>
                    <td><?php echo $dados['login_tel']; ?></td>
                    <td><?php echo $dados['login_profile']; ?></td>
                    <td><a href="form_update_cadastro.php?id_login=<?php echo $dados['id_login']; ?>"><img src="images/refresh.png" alt="Update" widht=18px height=18px></a></td>
                    <td><a href="exclui_cadastro.php?id_login=<?php echo $dados['id_login']; ?>"><img src="images/deletar-usuario.png" alt="Excluir" widht=18px height=18px></a></td>
                
        
                    </tr>
        
        
                <?php endwhile; ?>
        </tbody>
        </table><br><br><br>
    </div>


    <?php

    include "footer.php";

    ?>
</div>