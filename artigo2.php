<?php 

include('database/conexao.php'); 

$artigo_id = 2; 

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
                    Matemática 
                </span> 

                <h1> 
                    Dicas para estudar matemática
                </h1> 

                <p> 
                    Conheça estratégias práticas que podem ajudar pessoas 
                    com discalculia a aprender matemática de forma mais 
                    tranquila, visual e acessível. 
                </p> 

                <div class="artigo-info"> 
                    <span>📚 Educação</span> 
                    <span>⏱️ 5 min de leitura</span> 
                </div> 

            </div> 

            <div class="artigo-hero-image"> 

                <div class="numero numero-1">+</div> 
                <div class="numero numero-2">×</div> 
                <div class="numero numero-3">=</div> 

                <div class="artigo-brain"> 
                    🧠 
                </div> 

            </div> 

        </section> 

        <section class="artigo-container"> 

            <article class="artigo-conteudo"> 

                <p class="artigo-introducao"> 
                    Estudar matemática pode ser um desafio para muitas 
                    pessoas, principalmente para quem apresenta discalculia. 
                    Porém, algumas estratégias podem tornar o aprendizado 
                    mais simples, organizado e significativo.
                </p> 

                <p> 
                    A <strong>discalculia</strong> é um transtorno específico 
                    de aprendizagem que pode causar dificuldades na compreensão 
                    de números, operações e conceitos matemáticos. Por isso, 
                    encontrar maneiras diferentes de estudar pode fazer uma 
                    grande diferença no processo de aprendizagem.
                </p> 

                <h2 id="o-que-e">Por que algumas estratégias podem ajudar?</h2> 

                <p> 
                    Cada pessoa aprende de uma maneira diferente. Para pessoas 
                    com discalculia, utilizar apenas métodos tradicionais, 
                    como decorar fórmulas e repetir exercícios, pode não ser 
                    suficiente.
                </p> 

                <p> 
                    Recursos visuais, exemplos do cotidiano, materiais 
                    concretos e atividades práticas podem facilitar a 
                    compreensão dos conteúdos e ajudar na construção do 
                    conhecimento.
                </p> 

                <div class="artigo-destaque"> 

                    <strong>💡 Você sabia?</strong> 

                    <p> 
                        Estudar matemática não precisa ser apenas decorar 
                        fórmulas. Utilizar desenhos, objetos, jogos e exemplos 
                        do dia a dia também pode ajudar na compreensão.
                    </p> 

                </div> 

                <h2 id="sinais">1. Use recursos visuais</h2> 

                <p> 
                    Transformar números e operações em imagens pode facilitar 
                    a compreensão. Desenhos, esquemas, tabelas e representações 
                    visuais ajudam a tornar conceitos abstratos mais concretos.
                </p> 

                <p> 
                    Por exemplo, em vez de apenas resolver uma conta de 
                    multiplicação, é possível representar a operação utilizando 
                    grupos de objetos ou desenhos.
                </p> 

                <h2>2. Divida o conteúdo em pequenas partes</h2> 

                <p> 
                    Tentar aprender muitos conteúdos de uma só vez pode tornar 
                    o estudo cansativo e confuso. Uma alternativa é dividir 
                    o conteúdo em etapas menores.
                </p> 

                <p> 
                    Estude um conceito por vez e, depois de compreendê-lo, 
                    avance para o próximo. Dessa maneira, o aprendizado pode 
                    acontecer de forma mais gradual.
                </p> 

                <h2>3. Relacione a matemática ao cotidiano</h2> 

                <p> 
                    Utilizar situações do dia a dia pode ajudar a perceber 
                    como a matemática está presente em diferentes momentos.
                </p> 

                <ul class="lista-artigo"> 
                    <li>Calcular o preço de produtos no mercado;</li> 
                    <li>Conferir valores e trocos;</li> 
                    <li>Organizar horários e compromissos;</li> 
                    <li>Medir ingredientes de uma receita;</li> 
                    <li>Comparar preços e quantidades;</li> 
                    <li>Calcular distâncias e tempo.</li> 
                </ul> 

                <h2 id="dia-a-dia">4. Pratique com exercícios simples</h2> 

                <p> 
                    A prática pode ajudar a desenvolver maior familiaridade 
                    com os números e operações. Começar com exercícios mais 
                    simples e aumentar a dificuldade aos poucos pode tornar 
                    o processo menos frustrante.
                </p> 

                <p> 
                    Também é importante revisar conteúdos anteriores sempre 
                    que necessário. Aprender novamente algo que já foi estudado 
                    não significa voltar para trás, mas reforçar o conhecimento.
                </p> 

                <h2>5. Utilize jogos e atividades interativas</h2> 

                <p> 
                    Jogos educativos podem transformar o estudo em uma 
                    experiência mais divertida e menos cansativa. Eles podem 
                    estimular o raciocínio, a atenção e a prática das operações 
                    matemáticas.
                </p> 

                <div class="dicas-grid"> 

                    <div class="dica-card"> 
                        <span>🎮</span> 
                        <h3>Aprenda brincando</h3> 
                        <p> 
                            Jogos matemáticos podem tornar a prática mais 
                            divertida e ajudar na compreensão dos conteúdos.
                        </p> 
                    </div> 

                    <div class="dica-card"> 
                        <span>📝</span> 
                        <h3>Faça anotações</h3> 
                        <p> 
                            Registrar etapas e exemplos pode ajudar a organizar 
                            o raciocínio durante os exercícios.
                        </p> 
                    </div> 

                    <div class="dica-card"> 
                        <span>🐢</span> 
                        <h3>Respeite seu ritmo</h3> 
                        <p> 
                            Não tenha pressa. Cada pessoa possui seu próprio 
                            ritmo de aprendizagem.
                        </p> 
                    </div> 

                </div> 

                <h2 id="ajudar">6. Faça pausas durante os estudos</h2> 

                <p> 
                    Estudar por muito tempo sem descansar pode aumentar o 
                    cansaço e dificultar a concentração. Fazer pequenas pausas 
                    durante o estudo pode ajudar a manter a atenção.
                </p> 

                <p> 
                    Uma boa ideia é estudar por um período curto, fazer uma 
                    pausa e depois retornar às atividades. O mais importante 
                    é encontrar uma rotina que funcione para cada pessoa.
                </p> 

                <h2>7. Não tenha medo de pedir ajuda</h2> 

                <p> 
                    Quando um conteúdo parecer muito difícil, pedir ajuda pode 
                    ser uma parte importante do aprendizado. Professores, 
                    familiares e profissionais especializados podem ajudar a 
                    encontrar outras formas de explicar determinado conceito.
                </p> 

                <p> 
                    Fazer perguntas e pedir que uma explicação seja repetida 
                    não é motivo para vergonha. Entender o próprio ritmo e as 
                    próprias necessidades também faz parte do processo.
                </p> 

                <div class="artigo-final"> 

                    <h3>🌱 Cada passo conta</h3> 

                    <p> 
                        Aprender matemática pode levar tempo, mas pequenas 
                        conquistas fazem parte do processo. Com estratégias 
                        adequadas, prática e apoio, é possível desenvolver 
                        novas formas de compreender os números e resolver 
                        problemas matemáticos.
                    </p> 

                </div> 

            </article> 

            <aside class="artigo-sidebar"> 

                <div class="sidebar-card"> 

                    <h3>📌 Neste artigo</h3> 

                    <a href="#o-que-e">Por que algumas estratégias ajudam?</a> 
                    <a href="#sinais">Recursos visuais</a> 
                    <a href="#dia-a-dia">Prática e cotidiano</a> 
                    <a href="#ajudar">Como estudar melhor</a> 

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

                    <input type="hidden" name="artigo_id" value="2"> 

                    <input type="hidden" name="pagina" value="artigo2.php"> 

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
```
