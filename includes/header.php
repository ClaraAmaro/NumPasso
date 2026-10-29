<?php
    $paginaAtual = basename($_SERVER['PHP_SELF']);
?>

<header class="header">
    <div class="container">

        <a href="index.php" class="logo">
            <img src="/NumPasso/assets/images/logo_LadoALado.png" alt="Logo">
        </a>

        <nav class="nav">

            <a href="index.php" class="<?= ($paginaAtual == 'index.php') ? 'active' : '' ?>">
                Início
            </a>

            <a href="ajuda.php" class="<?= ($paginaAtual == 'ajuda.php') ? 'active' : '' ?>">
                Como o App ajuda
            </a>

            <a href="blog.php" class="<?= ($paginaAtual == 'blog.php') ? 'active' : '' ?>">
                Blog
            </a>

            <a href="contato.php" class="<?= ($paginaAtual == 'contato.php') ? 'active' : '' ?>">
                Contato
            </a>

        </nav>

        <button type="button" class="btn-theme" id="btn-theme" aria-label="Ativar modo noturno" aria-pressed="false" title="Modo noturno">
            <span class="material-symbols-outlined" aria-hidden="true">dark_mode</span>
        </button>

        <a href="#" class="btn-download">

            <span class="material-symbols-outlined">
                download
            </span>

            Baixar App

        </a>

    </div>
</header>