<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $destino = "diegoubatuba103@gmail.com"

    $assunto = "coleta de dados "

    $corpo = "nome: ".$nome."\n"."Email: ".$Email."\n"."Teleofone: ".$telefone;

    $cabeca = "From loginn103@gmail.com"."\n"."Replay-to: ".$emaiil."\n"."X=Mailer:PHP/".phpversion();

    if(mail($destino,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");

    }else{
        echo("ouve um erro ao enviar o E-Mail!");
    }

?>