<!DOCTYPE html>
<html lang="pt-br">

<?php include('includes/head.php'); ?>

<link rel="stylesheet" href="assets/css/blog.css">

<body>
    <?php include('includes/header.php'); ?>

    <section class="blog-topo">

        <div class="blog-topo-container">

            <div class="blog-texto">

                <span class="tag-blog">
                    Blog
                </span>

                <h2>
                    Artigos e conteúdos
                </h2>

                <p>
                    Informações, dicas e orientações sobre discalculia,
                    aprendizagem e como nosso aplicativo pode ajudar.
                </p>

            </div>

            <div class="blog-imagem">
                <img src="assets/images/blog.png" alt="Blog NumPasso">
            </div>

        </div>

    </section>

    <section class="blog">

        <div class="blog-container">

            <div class="blog-posts" id="lista-artigos">

                <a href="artigo1.php" class="card-blog">

                    <img src="assets/images/blog1.png" alt="Discalculia">

                    <div class="card-conteudo">

                        <span class="categoria">
                            Discalculia
                        </span>

                        <h3>
                            O que é a discalculia?
                        </h3>

                        <p>
                            Entenda o que é, como identificar e quais são
                            os principais sinais da discalculia.
                        </p>

                    </div>

                </a>

                <a href="artigo2.php" class="card-blog">

                    <img src="assets/images/blog2.png" alt="Dicas de estudo">

                    <div class="card-conteudo">

                        <span class="categoria">
                            Dicas
                        </span>

                        <h3>
                            Dicas para estudar matemática
                        </h3>

                        <p>
                            Estratégias práticas que ajudam pessoas com
                            discalculia a aprender melhor.
                        </p>

                    </div>

                </a>

                <a href="artigo3.php" class="card-blog">

                    <img src="assets/images/blog3.png" alt="Tecnologia">

                    <div class="card-conteudo">

                        <span class="categoria">
                            Dicas
                        </span>

                        <h3>
                            Como a tecnologia pode ajudar
                        </h3>

                        <p>
                            Recursos digitais tornam o aprendizado mais
                            acessível e divertido.
                        </p>

                    </div>

                </a>

                <a href="artigo4.php" class="card-blog">

                    <img src="assets/images/blog4.png" alt="Atividades">

                    <div class="card-conteudo">

                        <span class="categoria">
                            Atividades
                        </span>

                        <h3>
                            Atividades para o dia a dia
                        </h3>

                        <p>
                            Exercícios simples para reforçar o aprendizado
                            em casa.
                        </p>

                    </div>

                </a>

                <a href="artigo5.php" class="card-blog">

                    <img src="assets/images/blog5.png" alt="Rotina">

                    <div class="card-conteudo">

                        <span class="categoria">
                            Rotina
                        </span>

                        <h3>
                            A importância da rotina nos estudos
                        </h3>

                        <p>
                            Organização ajuda no desenvolvimento e na segurança
                            ao aprender.
                        </p>

                    </div>

                </a>

                <a href="artigo6.php" class="card-blog">

                    <img src="assets/images/blog6.png" alt="Família">

                    <div class="card-conteudo">

                        <span class="categoria">
                            Família
                        </span>

                        <h3>
                            Como apoiar quem tem discalculia
                        </h3>

                        <p>
                            Dicas para familiares ajudarem no processo de aprendizagem.
                        </p>

                    </div>

                </a>

            </div>

            <aside class="blog-lateral">


                <div class="pesquisa">
                    <input
                        type="text"
                        id="buscar-artigos"
                        placeholder="Buscar artigos..."
                        aria-label="Buscar artigos">
                    <ion-icon name="search-outline"></ion-icon>
                </div>


                <div class="categorias">

                    <h3>
                        Categorias
                    </h3>

                    <a href="blog/discalculia.php">Discalculia</a>
                    <a href="blog/dicas-matematica.php">Dicas de estudo</a>
                    <a href="blog/ajuda-tecnologica.php">Tecnologia</a>
                    <a href="blog/atividades.php">Atividades</a>
                    <a href="blog/importancia-estudos.php">Rotina</a>
                    <a href="blog/apoiar.php">Família</a>

                </div>

                <div class="sobre-app">

                    <h3> Sobre o aplicativo </h3>

                    <p>
                        Este aplicativo foi desenvolvido para ajudar pessoas com discalculia a aprender matemática de forma mais simples,
                        acessível e interativa. Aqui você encontra informações sobre a discalculia, dicas de estudo, atividades práticas e
                        recursos educativos que auxiliam no desenvolvimento das habilidades matemáticas. Nosso objetivo é oferecer um ambiente
                        de aprendizado acolhedor, onde cada pessoa possa evoluir no seu próprio ritmo, ganhando mais confiança e autonomia nos estudos.
                    </p>

                    <a href="#">
                        Saiba mais
                    </a>
                </div>

            </aside>

        </div>

    </section>

    <section class="acessibilidade">

        <div class="acessibilidade-box">

            <ion-icon name="accessibility-outline"></ion-icon>

            <div>

                <h3>
                    Acessibilidade é prioridade
                </h3>

                <p>
                    Criamos um ambiente inclusivo e acessível para que todos
                    possam aprender de forma confortável e respeitosa.
                </p>

            </div>

        </div>

    </section>
    <?php include('includes/footer.php'); ?>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const campoBusca = document.getElementById('buscar-artigos');
            const artigos = document.querySelectorAll('.card-blog');

            const mensagem = document.createElement('p');
            mensagem.textContent = 'Nenhum artigo encontrado.';
            mensagem.style.display = 'none';

            document.getElementById('lista-artigos')?.appendChild(mensagem);

            campoBusca.addEventListener('input', function() {
                const busca = campoBusca.value
                    .normalize('NFD')
                    .replace(/[\u0300-\u036f]/g, '')
                    .toLowerCase()
                    .trim();

                let encontrados = 0;

                artigos.forEach(function(artigo) {
                    const texto = artigo.innerText
                        .normalize('NFD')
                        .replace(/[\u0300-\u036f]/g, '')
                        .toLowerCase();

                    const corresponde = texto.includes(busca);

                    artigo.style.display = corresponde ? '' : 'none';

                    if (corresponde) {
                        encontrados++;
                    }
                });

                mensagem.style.display = encontrados === 0 ? 'block' : 'none';
            });
        });
    </script>
</body>

</html>