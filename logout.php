<?php 
    include('cria_sessao.php'); // inicia sessão
    // LIMPO AS VARIÁVEIS DA SESSÃO
    session_unset();
    // DESTRÓI A SESSÃO
    session_destroy();
    // VOLTA PARA A PAGINA INICIAL
    header('Location: index.php');

?>