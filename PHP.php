PHP
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $local = $_POST["local"];
    $data_saida = $_POST["data_saida"];
    $hora_saida = $_POST["hora_saida"];
    $data_devolucao = $_POST["data_devolucao"];
    $hora_devolucao = $_POST["hora_devolucao"];

    // Aqui você pode adicionar a lógica para enviar os dados por e-mail, salvar em banco de dados, etc.
    // Exemplo básico:
    // Enviar e-mail
    $to = "seu-email@example.com";
    $subject = "Formulário de Contato - Aluguel de Carros";
    $message = "Nome: $nome\n";
    $message .= "E-mail: $email\n";
    $message .= "Telefone: $telefone\n";
    $message .= "Local de Reserva: $local\n";
    $message .= "Data de Saída: $data_saida\n";
    $message .= "Horário de Saída: $hora_saida\n";
    $message .= "Data de Devolução: $data_devolucao\n";
    $message .= "Horário de Devolução: $hora_devolucao\n";
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);

    // Redirecionar para página de sucesso
    header("Location: sucesso.php");
    exit;
}
?>
