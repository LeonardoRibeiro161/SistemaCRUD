<?php
    session_start();
    $token = md5(session_id());
    if(isset($_GET['token']) && $_GET['token'] === $token) {

       session_destroy();
       echo"<script language='javascript' type='text/javascript'>alert('Logoff concluido com sucesso');window.location.href='login.html';</script>"; 
       exit();
    } else {
       echo '<a href="sair.php?token='.$token.'>Confirmar logout</a>';
    }

?>