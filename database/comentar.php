<?php

include('conexao.php');

$artigo_id = intval($_POST['artigo_id'] ?? 0);
$pagina = $_POST['pagina'] ?? '';

$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$comentario = trim($_POST['comentario'] ?? '');


// Verifica os campos

if (
    $artigo_id < 1 ||
    $artigo_id > 6 ||
    $nome === '' ||
    $email === '' ||
    $comentario === ''
) {

    echo "
    <script>
        alert('Preencha todos os campos!');
        window.history.back();
    </script>
    ";

    exit;
}


// Verifica e-mail

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo "
    <script>
        alert('Digite um e-mail válido!');
        window.history.back();
    </script>
    ";

    exit;
}


// Lista de páginas permitidas

$paginas_permitidas = [
    'artigo1.php',
    'artigo2.php',
    'artigo3.php',
    'artigo4.php',
    'artigo5.php',
    'artigo6.php'
];


// Verifica se a página existe na lista

if (!in_array($pagina, $paginas_permitidas)) {

    echo "
    <script>
        alert('Página inválida!');
        window.history.back();
    </script>
    ";

    exit;
}


// Insere no banco

$sql = "INSERT INTO comentarios
(artigo_id, nome, email, comentario)
VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($con, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "isss",
    $artigo_id,
    $nome,
    $email,
    $comentario
);

$resultado = mysqli_stmt_execute($stmt);


if ($resultado) {

    echo "
    <script>
        alert('Comentário publicado com sucesso!');
        window.location.href='../$pagina#comentarios';
    </script>
    ";

} else {

    echo "
    <script>
        alert('Erro ao publicar comentário!');
        window.history.back();
    </script>
    ";

}


mysqli_stmt_close($stmt);

?>