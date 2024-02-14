<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $para = 'diegovianagomes@gmail.com';
    $assunto = 'Mensagem do Formulário de Contato';
    $corpo = "Nome: $nome\nEmail: $email\nMensagem: $mensagem";
    $cabecalho = "From: seuemail@exemplo.com" . "\r\n" .
                "Reply-To: $email" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

    mail($para, $assunto, $corpo, $cabecalho);

    echo "Mensagem enviada com sucesso!";
}
?>