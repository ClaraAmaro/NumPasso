<?php  

include('database/conexao.php');  

$artigo_id = 5;  

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
                    Organização
                </span>  

                <h1>  
                    A importância da rotina nos estudos
                </h1>  

                <p>  
                    Descubra como uma rotina organizada pode ajudar no desenvolvimento,
                    na concentração e na segurança durante o aprendizado.
                </p>  

                <div class="artigo-info">  
                    <span>📚 Estudos</span>  
                    <span>⏱️ 5 min de leitura</span>  
                </div>  

            </div>  

            <div class="artigo-hero-image">  

                <div class="numero numero-1">📚</div>  
                <div class="numero numero-2">✓</div>  
                <div class="numero numero-3">🕐</div>  

                <div class="artigo-brain">  
                    🧠  
                </div>  

            </div>  

        </section>  

        <section class="artigo-container">  

            <article class="artigo-conteudo">  

                <p class="artigo-introducao">  
                    Ter uma rotina de estudos pode fazer uma grande diferença no
                    processo de aprendizagem. Organizar os horários e estabelecer
                    momentos específicos para estudar ajuda o estudante a entender
                    melhor suas atividades e a criar hábitos mais consistentes.
                </p>  

                <p>  
                    Para pessoas com <strong>discalculia</strong>, uma rotina organizada
                    pode ser ainda mais importante, pois oferece maior previsibilidade
                    e segurança durante as atividades. Ter uma sequência de tarefas
                    pode ajudar a diminuir a ansiedade e facilitar a concentração.
                </p>  

                <h2 id="o-que-e">Como a rotina pode ajudar nos estudos?</h2>  

                <p>  
                    Uma rotina permite que o estudante saiba o que precisa fazer
                    e em qual momento. Isso pode ajudar a evitar o acúmulo de
                    tarefas e tornar o processo de aprendizagem mais organizado.
                </p>  

                <p>  
                    Além disso, quando os estudos fazem parte da rotina, torna-se
                    mais fácil criar o hábito de estudar regularmente, sem depender
                    apenas da motivação para começar uma atividade.
                </p>  

                <div class="artigo-destaque">  

                    <strong>💡 Você sabia?</strong>  

                    <p>  
                        Manter horários e atividades organizadas pode ajudar o
                        estudante a se sentir mais preparado e seguro para realizar
                        suas tarefas.
                    </p>  

                </div>  

                <h2 id="sinais">1. Organização das atividades</h2>  

                <p>  
                    Organizar as atividades é um dos primeiros passos para criar
                    uma boa rotina de estudos. O estudante pode anotar as tarefas,
                    provas e trabalhos que precisam ser realizados.
                </p>  

                <p>  
                    Uma agenda, calendário ou lista de tarefas pode ajudar a
                    visualizar melhor os compromissos e evitar que alguma atividade
                    importante seja esquecida.
                </p>  

                <h2>2. Definir horários para estudar</h2>  

                <p>  
                    Estabelecer horários específicos para os estudos pode ajudar
                    na criação de um hábito. Não é necessário estudar durante
                    muitas horas seguidas. O mais importante é manter uma frequência
                    que seja possível de seguir.
                </p>  

                <p>  
                    Também é importante reservar momentos para descanso, alimentação
                    e outras atividades. Uma rotina equilibrada pode tornar os
                    estudos mais leves e produtivos.
                </p>  

                <h2>3. Criar um ambiente adequado</h2>  

                <p>  
                    O local onde o estudante realiza suas atividades também pode
                    influenciar sua concentração. Sempre que possível, é interessante
                    escolher um espaço organizado, tranquilo e com os materiais
                    necessários por perto.
                </p>  

                <p>  
                    Ter um ambiente preparado para estudar pode ajudar o cérebro
                    a associar aquele momento à atividade de aprendizagem.
                </p>  

                <h2 id="dia-a-dia">4. Dividir as tarefas</h2>  

                <p>  
                    Quando uma atividade parece muito grande ou difícil, dividi-la
                    em pequenas etapas pode facilitar sua realização. Dessa forma,
                    o estudante consegue acompanhar seu progresso aos poucos.
                </p>  

                <ul class="lista-artigo">  
                    <li>Separar as tarefas por prioridade;</li>  
                    <li>Dividir atividades maiores em pequenas etapas;</li>  
                    <li>Estabelecer metas simples;</li>  
                    <li>Fazer pequenas pausas durante os estudos;</li>  
                    <li>Organizar os materiais necessários;</li>  
                    <li>Acompanhar as atividades já realizadas.</li>  
                </ul>  

                <h2>5. Aprender no próprio ritmo</h2>  

                <p>  
                    Cada pessoa possui seu próprio ritmo de aprendizagem. Por isso,
                    uma boa rotina não precisa ser igual para todos. O importante
                    é encontrar uma organização que funcione para cada estudante.
                </p>  

                <p>  
                    Para quem apresenta dificuldades com a matemática, pode ser
                    interessante reservar mais tempo para determinados conteúdos,
                    permitindo que eles sejam praticados com calma e sem pressão.
                </p>  

                <div class="dicas-grid">  

                    <div class="dica-card">  
                        <span>📅</span>  
                        <h3>Planejamento</h3>  
                        <p>  
                            Organizar horários e tarefas ajuda o estudante a saber
                            o que precisa fazer durante o dia.
                        </p>  
                    </div>  

                    <div class="dica-card">  
                        <span>🎯</span>  
                        <h3>Metas</h3>  
                        <p>  
                            Pequenas metas podem facilitar o acompanhamento do
                            progresso durante os estudos.
                        </p>  
                    </div>  

                    <div class="dica-card">  
                        <span>🧘</span>  
                        <h3>Equilíbrio</h3>  
                        <p>  
                            Momentos de descanso também são importantes para
                            manter uma rotina saudável de estudos.
                        </p>  
                    </div>  

                </div>  

                <h2 id="ajudar">6. Rotina como apoio à segurança</h2>  

                <p>  
                    Saber o que vai acontecer durante o dia pode trazer uma sensação
                    maior de segurança para o estudante. Quando as atividades estão
                    organizadas, pode ser mais fácil se preparar para cada tarefa.
                </p>  

                <p>  
                    Para pessoas com discalculia, essa previsibilidade pode ser
                    especialmente útil. Uma rotina estruturada pode ajudar a reduzir
                    a sensação de confusão diante de muitas tarefas e permitir que
                    o estudante se concentre melhor em cada etapa.
                </p>  

                <h2>7. A rotina e o NumPasso</h2>  

                <p>  
                    O <strong>NumPasso</strong> também pode fazer parte de uma rotina
                    de estudos. Por meio de atividades lúdicas e interativas, o
                    projeto busca oferecer uma forma mais leve de praticar conteúdos
                    relacionados à matemática.
                </p>  

                <p>  
                    Reservar alguns minutos para realizar atividades e desafios pode
                    ajudar o estudante a praticar regularmente, acompanhando seu
                    desenvolvimento de maneira gradual.
                </p>  

                <div class="artigo-final">  

                    <h3>📚 Uma rotina pode tornar o aprendizado mais seguro</h3>  

                    <p>  
                        Criar uma rotina de estudos não significa estudar o tempo
                        todo. Significa organizar o tempo de forma que o aprendizado
                        tenha espaço na vida do estudante. Com planejamento,
                        equilíbrio e respeito ao próprio ritmo, estudar pode se
                        tornar uma experiência mais tranquila e segura.
                    </p>  

                </div>  

            </article>  

            <aside class="artigo-sidebar">  

                <div class="sidebar-card">  

                    <h3>📌 Neste artigo</h3>  

                    <a href="#o-que-e">Como a rotina ajuda?</a>  
                    <a href="#sinais">Organização e horários</a>  
                    <a href="#dia-a-dia">Dividir as tarefas</a>  
                    <a href="#ajudar">Rotina como apoio</a>  

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

                    <input type="hidden" name="artigo_id" value="5">  

                    <input type="hidden" name="pagina" value="artigo5.php">  

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