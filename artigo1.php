<?php

include('database/conexao.php');

$artigo_id = 1;

$sql = "SELECT * FROM comentarios
        WHERE artigo_id = ?
        ORDER BY data_comentario DESC";

$stmt = mysqli_prepare($con, $sql);

mysqli_stmt_bind_param($stmt, "i", $artigo_id);

mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);

$comentarios = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

mysqli_stmt_close($stmt);

?>

<!DOCTYPE html>
<html lang="pt-br">

<?php include('includes/head.php'); ?>
<link rel="stylesheet" href="assets/css/artigo1.css">


<body>

    <?php include('includes/header.php'); ?>

    <main class="artigo-page">

    <div class="voltar-blog">
            <a href="blog.php">
                ← Voltar para o blog
            </a>
        </div>

        <section class="artigo-hero">

            <div class="artigo-hero-content">

                <span class="artigo-tag">
                    Discalculia
                </span>

                <h1>
                    O que é a discalculia?
                </h1>

                <p>
                    Entenda o que é esse transtorno de aprendizagem,
                    seus principais sinais e como tornar o aprendizado
                    da matemática mais acessível.
                </p>

                <div class="artigo-info">
                    <span>📚 Educação</span>
                    <span>⏱️ 5 min de leitura</span>
                </div>

            </div>

            <div class="artigo-hero-image">

                <div class="numero numero-1">1</div>
                <div class="numero numero-2">2</div>
                <div class="numero numero-3">+</div>

                <div class="artigo-brain">
                    🧠
                </div>

            </div>

        </section>

        <section class="artigo-container">

            <article class="artigo-conteudo">

                <p class="artigo-introducao">
                    A matemática está presente em diversas situações do
                    nosso cotidiano. Porém, para algumas pessoas, compreender
                    números, operações e conceitos matemáticos pode ser
                    especialmente desafiador.
                </p>

                <p>
                    A <strong>discalculia</strong> é um transtorno específico
                    de aprendizagem que pode dificultar a compreensão e o uso
                    de conceitos matemáticos. Ela pode aparecer desde a
                    infância e acompanhar a pessoa durante diferentes fases
                    da vida.
                </p>


                <h2>O que é a discalculia?</h2>

                <p>
                    A discalculia é uma dificuldade persistente relacionada
                    à aprendizagem da matemática. Pessoas com discalculia
                    podem apresentar dificuldades para compreender números,
                    realizar cálculos, reconhecer quantidades ou memorizar
                    determinados fatos matemáticos.
                </p>

                <p>
                    É importante entender que ter dificuldade em matemática
                    não significa necessariamente ter discalculia. A
                    identificação desse transtorno deve ser realizada por
                    profissionais especializados, considerando diferentes
                    aspectos do desenvolvimento e da aprendizagem.
                </p>


                <div class="artigo-destaque">
                    <strong>💡 Você sabia?</strong>

                    <p>
                        A discalculia não está relacionada à falta de
                        inteligência. Uma pessoa pode apresentar dificuldades
                        específicas em matemática e ter facilidade em outras
                        áreas.
                    </p>
                </div>


                <h2>Quais são os principais sinais?</h2>

                <p>
                    Os sinais podem variar de pessoa para pessoa. Alguns
                    exemplos que podem aparecer durante o processo de
                    aprendizagem são:
                </p>

                <ul class="lista-artigo">
                    <li>Dificuldade para compreender quantidades;</li>
                    <li>Confusão entre números ou símbolos matemáticos;</li>
                    <li>Dificuldade para realizar operações básicas;</li>
                    <li>Problemas para memorizar sequências numéricas;</li>
                    <li>Dificuldade para compreender conceitos de tempo;</li>
                    <li>Problemas para lidar com dinheiro e cálculos do cotidiano.</li>
                </ul>


                <h2>Como isso pode afetar o dia a dia?</h2>

                <p>
                    As dificuldades matemáticas podem aparecer não somente
                    na escola, mas também em atividades cotidianas.
                    Organizar horários, calcular valores, conferir troco
                    ou compreender medidas são alguns exemplos.
                </p>

                <p>
                    Por isso, oferecer apoio adequado pode contribuir para
                    que a pessoa desenvolva estratégias próprias para lidar
                    com essas situações.
                </p>


                <h2>Como ajudar no aprendizado?</h2>

                <p>
                    O aprendizado pode ser facilitado quando os conteúdos
                    são apresentados de maneira visual, prática e gradual.
                    Jogos educativos, atividades interativas e exemplos
                    relacionados ao cotidiano podem tornar o processo mais
                    leve e significativo.
                </p>

                <div class="dicas-grid">

                    <div class="dica-card">
                        <span>🎮</span>
                        <h3>Use jogos</h3>
                        <p>
                            Atividades lúdicas podem estimular o raciocínio
                            matemático de forma mais divertida.
                        </p>
                    </div>

                    <div class="dica-card">
                        <span>👀</span>
                        <h3>Explore o visual</h3>
                        <p>
                            Imagens, cores e representações visuais podem
                            facilitar a compreensão de conceitos.
                        </p>
                    </div>

                    <div class="dica-card">
                        <span>🐢</span>
                        <h3>Respeite o ritmo</h3>
                        <p>
                            Cada pessoa possui seu próprio ritmo de
                            aprendizagem.
                        </p>
                    </div>

                </div>


                <h2>O papel do apoio</h2>

                <p>
                    O acompanhamento de professores, familiares e
                    profissionais especializados pode ser importante para
                    compreender as necessidades de cada pessoa e encontrar
                    estratégias adequadas.
                </p>

                <p>
                    Mais do que decorar fórmulas, o objetivo é ajudar o
                    estudante a desenvolver confiança e encontrar maneiras
                    de compreender a matemática.
                </p>


                <div class="artigo-final">

                    <h3>🌱 Aprender pode acontecer passo a passo</h3>

                    <p>
                        Com apoio, paciência e estratégias adequadas,
                        dificuldades matemáticas podem ser trabalhadas de
                        diferentes maneiras.
                    </p>

                </div>

            </article>

            <aside class="artigo-sidebar">

                <div class="sidebar-card">

                    <h3>📌 Neste artigo</h3>

                    <a href="#o-que-e">O que é a discalculia?</a>
                    <a href="#sinais">Principais sinais</a>
                    <a href="#dia-a-dia">Impactos no dia a dia</a>
                    <a href="#ajudar">Como ajudar</a>

                </div>

                <div class="sidebar-card sidebar-green">

                    <h3>💚 Sobre o NumPasso</h3>

                    <p>
                        O NumPasso busca tornar o aprendizado da matemática
                        mais acessível, visual e leve.
                    </p>

                    <a href="index.php">
                        Conheça o projeto →
                    </a>

                </div>

            </aside>

        </section>

        <section class="comentarios-section" id="comentarios">

            <div class="comentarios-container">

                <div class="comentarios-header">

                    <span class="artigo-tag">
                        Sua opinião
                    </span>

                    <h2>
                        O que você achou?
                    </h2>

                    <p>
                        Compartilhe sua opinião, dúvida ou experiência
                        sobre o assunto.
                    </p>

                </div>

                <form action="database/comentar.php" method="POST" class="comentario-form">

    <input type="hidden" name="artigo_id" value="1">

    <input type="hidden" name="pagina" value="artigo1.php">

    <div class="form-row">

        <div class="form-group">

            <label for="nome">
                Nome
            </label>

            <input
                type="text"
                id="nome"
                name="nome"
                placeholder="Digite seu nome"
                maxlength="100"
                required
            >

        </div>


        <div class="form-group">

            <label for="email">
                E-mail
            </label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="Digite seu e-mail"
                maxlength="150"
                required
            >

        </div>

    </div>


    <div class="form-group">

        <label for="comentario">
            Comentário
        </label>

        <textarea
            id="comentario"
            name="comentario"
            placeholder="Escreva seu comentário..."
            maxlength="1000"
            required
        ></textarea>

    </div>


    <button type="submit" class="btn-comentar">
        Publicar comentário
    </button>

</form>


                <!-- COMENTÁRIOS SALVOS -->

                <div class="comentarios-lista">

                    <h3>
                        Comentários
                    </h3>

                    <?php if (count($comentarios) > 0): ?>

                        <?php foreach ($comentarios as $comentario): ?>

                            <div class="comentario">

                                <div class="comentario-avatar">
                                    <?= strtoupper(substr($comentario['nome'], 0, 1)); ?>
                                </div>

                                <div class="comentario-content">

                                    <div class="comentario-top">

                                        <strong>
                                            <?= htmlspecialchars($comentario['nome']); ?>
                                        </strong>

                                        <span>
                                            <?= date(
                                                'd/m/Y H:i',
                                                strtotime($comentario['data_comentario'])
                                            ); ?>
                                        </span>

                                    </div>

                                    <p>
                                        <?= nl2br(
                                            htmlspecialchars($comentario['comentario'])
                                        ); ?>
                                    </p>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <div class="sem-comentarios">

                            <span>💬</span>

                            <p>
                                Ainda não há comentários.
                                Seja a primeira pessoa a comentar!
                            </p>

                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </section>

    </main>


    <?php include('includes/footer.php'); ?>

</body>

</html>