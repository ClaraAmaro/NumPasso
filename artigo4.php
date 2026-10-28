<?php  

include('database/conexao.php');  

$artigo_id = 4;  

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

        <!-- SETA PARA VOLTAR AO BLOG -->
        <div class="voltar-blog">
            <a href="blog.php">
                ← Voltar para o blog
            </a>
        </div>

        <section class="artigo-hero">  

            <div class="artigo-hero-content">  

                <span class="artigo-tag">  
                    Tecnologia  
                </span>  

                <h1>  
                    Como a tecnologia pode ajudar
                </h1>  

                <p>  
                    Descubra como os recursos digitais podem tornar o aprendizado 
                    da matemática mais acessível, interativo e divertido para 
                    pessoas com discalculia.  
                </p>  

                <div class="artigo-info">  
                    <span>💻 Tecnologia</span>  
                    <span>⏱️ 5 min de leitura</span>  
                </div>  

            </div>  

            <div class="artigo-hero-image">  

                <div class="numero numero-1">1</div>  
                <div class="numero numero-2">+</div>  
                <div class="numero numero-3">💻</div>  

                <div class="artigo-brain">  
                    🧠  
                </div>  

            </div>  

        </section>  

        <section class="artigo-container">  

            <article class="artigo-conteudo">  

                <p class="artigo-introducao">  
                    A tecnologia está cada vez mais presente na educação e pode 
                    ser uma importante aliada no processo de aprendizagem. 
                    Aplicativos, jogos, vídeos e outras ferramentas digitais 
                    podem tornar o estudo da matemática mais acessível e 
                    interessante.
                </p>  

                <p>  
                    Para pessoas com <strong>discalculia</strong>, esses recursos 
                    podem oferecer diferentes formas de apresentar os conteúdos, 
                    permitindo que números e operações sejam trabalhados de 
                    maneira mais visual, prática e interativa.
                </p>  

                <h2 id="o-que-e">Como a tecnologia pode facilitar o aprendizado?</h2>  

                <p>  
                    Nem todas as pessoas aprendem da mesma maneira. Algumas 
                    podem compreender melhor um conteúdo quando ele é apresentado 
                    por meio de imagens, animações, sons ou atividades práticas.
                </p>  

                <p>  
                    Os recursos digitais permitem combinar diferentes formas 
                    de aprendizagem. Dessa maneira, conceitos matemáticos podem 
                    ser apresentados de maneira mais dinâmica, ajudando o 
                    estudante a acompanhar cada etapa do processo.
                </p>  

                <div class="artigo-destaque">  

                    <strong>💡 Você sabia?</strong>  

                    <p>  
                        Recursos digitais podem permitir que o estudante pratique 
                        no próprio ritmo, repetindo uma atividade quantas vezes 
                        forem necessárias para compreender determinado conteúdo.
                    </p>  

                </div>  

                <h2 id="sinais">1. Jogos educativos</h2>  

                <p>  
                    Os jogos educativos podem transformar o estudo em uma 
                    experiência mais divertida. Em vez de apenas responder 
                    exercícios tradicionais, o estudante pode aprender enquanto 
                    participa de desafios e atividades interativas.
                </p>  

                <p>  
                    Jogos de matemática podem trabalhar operações, números, 
                    sequências, lógica e raciocínio de uma maneira mais leve, 
                    tornando a prática menos cansativa.
                </p>  

                <h2>2. Aplicativos de aprendizagem</h2>  

                <p>  
                    Aplicativos podem oferecer atividades específicas para 
                    diferentes conteúdos matemáticos. Alguns permitem escolher 
                    níveis de dificuldade e acompanhar o progresso durante as 
                    atividades.
                </p>  

                <p>  
                    Isso pode ajudar o estudante a praticar conteúdos que ainda 
                    apresentam dificuldade e avançar gradualmente conforme se 
                    sentir mais preparado.
                </p>  

                <h2>3. Vídeos e animações</h2>  

                <p>  
                    Vídeos podem apresentar uma explicação de diferentes maneiras, 
                    utilizando imagens, exemplos e animações. Isso pode facilitar 
                    a compreensão de conteúdos que parecem muito abstratos quando 
                    apresentados apenas por meio de textos ou fórmulas.
                </p>  

                <p>  
                    Além disso, o estudante pode pausar, voltar ou assistir 
                    novamente a uma explicação sempre que necessário.
                </p>  

                <h2 id="dia-a-dia">4. Recursos visuais e interativos</h2>  

                <p>  
                    Ferramentas digitais podem transformar números e operações 
                    em representações visuais. Gráficos, imagens, animações e 
                    elementos interativos podem ajudar a tornar os conceitos 
                    matemáticos mais concretos.
                </p>  

                <ul class="lista-artigo">  
                    <li>Gráficos e tabelas interativas;</li>  
                    <li>Representações visuais de operações;</li>  
                    <li>Animações para explicar conceitos;</li>  
                    <li>Atividades com imagens e símbolos;</li>  
                    <li>Exercícios interativos;</li>  
                    <li>Jogos educativos.</li>  
                </ul>  

                <h2>5. Aprender no próprio ritmo</h2>  

                <p>  
                    Uma das vantagens dos recursos digitais é a possibilidade 
                    de praticar no próprio ritmo. O estudante pode repetir 
                    atividades, revisar conteúdos e dedicar mais tempo aos 
                    assuntos que apresentam maior dificuldade.
                </p>  

                <p>  
                    Isso pode tornar o aprendizado menos pressionado e permitir 
                    que cada pessoa encontre uma maneira mais confortável de 
                    estudar.
                </p>  

                <div class="dicas-grid">  

                    <div class="dica-card">  
                        <span>🎮</span>  
                        <h3>Jogos</h3>  
                        <p>  
                            Atividades interativas podem tornar a matemática 
                            mais divertida e estimular a prática.
                        </p>  
                    </div>  

                    <div class="dica-card">  
                        <span>📱</span>  
                        <h3>Aplicativos</h3>  
                        <p>  
                            Aplicativos podem oferecer exercícios e atividades 
                            adaptadas a diferentes necessidades.
                        </p>  
                    </div>  

                    <div class="dica-card">  
                        <span>🎥</span>  
                        <h3>Vídeos</h3>  
                        <p>  
                            Vídeos e animações podem apresentar os conteúdos 
                            de maneira visual e mais fácil de acompanhar.
                        </p>  
                    </div>  

                </div>  

                <h2 id="ajudar">6. Tecnologia como apoio, não substituição</h2>  

                <p>  
                    Apesar de seus benefícios, a tecnologia deve ser utilizada 
                    como uma ferramenta de apoio ao aprendizado. Ela não substitui 
                    o acompanhamento de professores, familiares ou profissionais 
                    especializados.
                </p>  

                <p>  
                    O mais importante é encontrar recursos que realmente façam 
                    sentido para cada estudante e utilizá-los de maneira 
                    equilibrada durante o processo de aprendizagem.
                </p>  

                <h2>7. O NumPasso e a tecnologia</h2>  

                <p>  
                    O <strong>NumPasso</strong> é um exemplo de como a tecnologia 
                    pode ser utilizada para apoiar o aprendizado da matemática. 
                    A proposta busca apresentar atividades de maneira mais 
                    acessível, visual e interativa.
                </p>  

                <p>  
                    Por meio de recursos digitais e atividades lúdicas, o projeto 
                    busca tornar o contato com a matemática mais leve e ajudar 
                    estudantes a desenvolverem suas habilidades no próprio ritmo.
                </p>  

                <div class="artigo-final">  

                    <h3>💻 Tecnologia pode tornar o aprendizado mais acessível</h3>  

                    <p>  
                        Quando utilizada de maneira adequada, a tecnologia pode 
                        oferecer novas possibilidades para aprender matemática. 
                        Jogos, aplicativos, vídeos e atividades interativas podem 
                        tornar o estudo mais visual, divertido e acessível.
                    </p>  

                </div>  

            </article>  

            <aside class="artigo-sidebar">  

                <div class="sidebar-card">  

                    <h3>📌 Neste artigo</h3>  

                    <a href="#o-que-e">Como a tecnologia ajuda?</a>  
                    <a href="#sinais">Jogos e aplicativos</a>  
                    <a href="#dia-a-dia">Recursos visuais</a>  
                    <a href="#ajudar">Tecnologia como apoio</a>  

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

                    <input type="hidden" name="artigo_id" value="4">  

                    <input type="hidden" name="pagina" value="artigo4.php">  

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
