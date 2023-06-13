<?php 
    include('cria_sessao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Página Inicial - Projeto Cadastro IFSP</h3>
    <?php 
        if(!empty($_SESSION['login'])){ // caso a sessão esteja diferente de vazia
            // executa isso.
            echo "<h3>Ola ".$_SESSION['login']['nome_usuario']."</h3>"; // pega o nome do login
            echo "<a href='logout.php'>Sair</a>";
        }
    ?>
    <hr>
    <ul class="nav nav-pills">
       <li class="nav-item"><a class="nav-link active mx-3" href="cadastro_usuario.html">Cadastrar</a></li>
       <li class="nav-item"><a class="nav-link active mx-3" href="listar_usuarios.php">Listar</a></li>
       <?php 
       if(empty($_SESSION['login'])){ // caso a sessão esteja vazia mostra o botão de login
       echo "<li class='nav-item'><a class='nav-link active mx-3' href='login.html'>Login</a></li>";
        }
       ?>
    </ul>
</body>
</html>