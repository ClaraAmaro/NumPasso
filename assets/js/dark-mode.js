(function () {
    const chave = 'numpasso-modo-noturno';

    function aplicarModo(noturno) {
        document.body.classList.toggle('dark-mode', noturno);
        const botao = document.getElementById('btn-theme');
        if (!botao) return;
        botao.setAttribute('aria-pressed', String(noturno));
        botao.setAttribute('aria-label', noturno ? 'Ativar modo normal' : 'Ativar modo noturno');
        botao.setAttribute('title', noturno ? 'Modo normal' : 'Modo noturno');
        botao.innerHTML = '<span class="material-symbols-outlined" aria-hidden="true">' +
            (noturno ? 'light_mode' : 'dark_mode') + '</span>';
    }

    function iniciar() {
        let noturno = false;
        try { noturno = localStorage.getItem(chave) === 'true'; } catch (e) {}
        aplicarModo(noturno);

        const botao = document.getElementById('btn-theme');
        if (botao) {
            botao.addEventListener('click', function () {
                noturno = !document.body.classList.contains('dark-mode');
                aplicarModo(noturno);
                try { localStorage.setItem(chave, String(noturno)); } catch (e) {}
            });
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', iniciar);
    } else {
        iniciar();
    }
})();
