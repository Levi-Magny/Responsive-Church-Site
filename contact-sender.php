<?php

    if(isset($_POST['nome']) && !empty($_POST['nome'])){

        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $mensagem = addslashes($_POST['mensagem']);

        $to = "ibmtucuma@gmail.com";
        $subject = "Contato - Site - IBM Tucumã";
        $body = "Nome: ".$nome."\r\n".
                "Email: ".$email."\r\n".
                "Mensagem: ".$mensagem;
        $header = "From:contato@ibmtucuma.com"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

        if(mail($to, $subject, $body, $header)){
            echo("email enviado com sucesso!!!");
        }else{
            echo("email email não pôde ser enviado!!!");
        }
    }
?>