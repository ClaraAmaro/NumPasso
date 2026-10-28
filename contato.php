<!DOCTYPE html>
<html lang="pt-br">

<?php include('includes/head.php'); ?>

<link rel="stylesheet" href="assets/css/contato.css">

<body>

    <?php include('includes/header.php'); ?>

    <section class="contato-topo">

        <div class="contato-topo-container">

            <div class="contato-texto">

                <span class="tag-contato">
                    Contato
                </span>

                <h1>
                    Fale <span>conosco</span>
                </h1>

                <p>
                    Estamos aqui para ouvir você! Tire dúvidas, envie
                    sugestões ou saiba mais sobre o aplicativo e a discalculia.
                </p>

            </div>

            <div class="contato-imagem">
                <img src="assets/images/menina_contato.png" alt="Contato">
            </div>

        </div>

    </section>

    <section class="contato">

        <div class="contato-container">

            <div class="contato-info">

                <div class="info-card">

                    <div class="icone">
                        <ion-icon name="mail-outline"></ion-icon>
                    </div>

                    <h3>
                        E-mail
                    </h3>

                    <p>
                        Fale com nossa equipe por
                        e-mail sempre que precisar.
                    </p>

                    <span>
                        numpasso@discalculia.app
                    </span>

                </div>

                <div class="info-card">

                    <div class="icone">
                        <ion-icon name="call-outline"></ion-icon>
                    </div>

                    <h3>
                        Telefone / WhatsApp
                    </h3>

                    <p>
                        Atendimento de segunda a
                        sexta, das 9h às 17h.
                    </p>

                    <span>
                        (12) 12345-6789
                    </span>

                </div>

                <div class="acessibilidade-box">

                    <ion-icon name="accessibility-outline"></ion-icon>

                    <div>

                        <h3>
                            Acessibilidade é prioridade
                        </h3>

                        <p>
                            Queremos que cada pessoa se sinta confortável e
                            segura durante sua jornada de aprendizado.
                        </p>

                    </div>

                </div>

            </div>

            <div class="formulario-box">

                <h2>
                    Envie sua mensagem
                </h2>

                <p>
                    Preencha o formulário e nossa equipe entrará em contato
                    o mais rápido possível.
                </p>

                <form action="database/enviar.php" method="POST">

                    <div class="duplo">

                        <div class="campo">

                            <label>
                                Nome completo
                            </label>

                            <input type="text" name="nome" placeholder="Seu nome" required>

                        </div>

                        <div class="campo">

                            <label>
                                E-mail
                            </label>

                            <input type="email" name="email" placeholder="Seu@email.com" required>

                        </div>

                    </div>

                    <div class="campo">

                        <label>
                            Assunto
                        </label>

                        <select name="assunto" required>

                            <option value="">
                                Selecione um assunto
                            </option>

                            <option value="Dúvida">
                                Dúvida
                            </option>

                            <option value="Sugestão">
                                Sugestão
                            </option>

                            <option value="Suporte">
                                Suporte
                            </option>

                        </select>

                    </div>

                    <div class="campo">

                        <label>
                            Mensagem
                        </label>

                        <textarea name="mensagem" placeholder="Escreva sua mensagem..." required></textarea>

                    </div>

                    <div class="formulario-rodape">

                        <div class="seguro">

                            <ion-icon name="lock-closed-outline"></ion-icon>

                            <div>

                                <p>
                                    Seus dados estão seguros conosco.
                                </p>

                                <p>
                                    Não compartilhamos suas informações.
                                </p>

                            </div>

                        </div>

                        <button type="submit">

                            Enviar mensagem

                            <ion-icon name="arrow-forward-outline"></ion-icon>

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </section>

    <?php include('includes/footer.php'); ?>

</body>

</html>