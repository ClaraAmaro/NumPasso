<?php

include('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO mensagens
(nome_completo, email, assunto, mensagem)
VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($con, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "ssss",
    $nome,
    $email,
    $assunto,
    $mensagem
);

$resultado = mysqli_stmt_execute($stmt);

if ($resultado) {

    echo "
    <script>
        alert('Mensagem enviada com sucesso!');
        window.location.href='../contato.php';
    </script>
    ";

} else {

    echo "
    <script>
        alert('Erro ao enviar mensagem!');
        window.location.href='../contato.php';
    </script>
    ";

}

mysqli_stmt_close($stmt);

?>