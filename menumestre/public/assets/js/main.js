const nav = document.getElementById('menu');
    const gridContainer = document.querySelector('.grid-container');
    const sections = document.querySelectorAll('section');
    const titleSpans = nav.querySelectorAll('.nav-title');
    const contentDiv = document.getElementById('botoes-filtro');


    nav.addEventListener('mouseleave', () => {
        gridContainer.style.gridTemplateColumns = '100px 1fr';
        const titleSpans = nav.querySelectorAll('.nav-title');
        titleSpans.forEach(span => {
            span.style.display = 'none';
        });

    });

    nav.addEventListener('mouseenter', () => {
        gridContainer.style.gridTemplateColumns = '300px 1fr';
        const titleSpans = nav.querySelectorAll('.nav-title');
        titleSpans.forEach(span => {
            span.style.display = 'inline-block';
        });

    });
    titleSpans.forEach(span => {
        span.addEventListener('click', () => {
            // Remove a classe 'ativo' de todas as .nav-title
            titleSpans.forEach(span => {
                span.classList.remove('ativo');
            });

            // Adiciona a classe 'ativo' apenas à .nav-title clicada
            span.classList.add('ativo');

            // Obtém o índice da .nav-title clicada
            const index = Array.from(titleSpans).indexOf(span);

            // Mostra a seção correspondente e oculta as outras
            sections.forEach((section, i) => {
                if (i === index) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        });
    });


 // Filtro do cardápio

 document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.filtro-btn button');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove a classe 'filtro-ativo' de todos os botões
            buttons.forEach(btn => btn.classList.remove('filtro-ativo'));

            // Adiciona a classe 'filtro-ativo' ao botão clicado
            button.classList.add('filtro-ativo');

            // Obtém a categoria do botão clicado
            const categoria = button.getAttribute('data-categoria');

            // Filtra os cards com base na categoria
            filtrar(categoria);
        });
    });
});

function filtrar(categoria) {
    const cardContainer = document.getElementById('card-container');
    const cards = cardContainer.getElementsByClassName('card-show');

    for (const card of cards) {
        const categoriaProduto = card.getAttribute('data-categoria');

        if (categoria === 'todos' || categoria === categoriaProduto) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    }
}

// filtro mesaaaa


document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.filtro-btn button');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove a classe 'filtro-ativo' de todos os botões
            buttons.forEach(btn => btn.classList.remove('filtro-ativo'));

            // Adiciona a classe 'filtro-ativo' ao botão clicado
            button.classList.add('filtro-ativo');

            // Obtém o status do botão clicado
            const status = button.getAttribute('data-status');

            // Filtra as mesas com base no status
            filtrar(status);
        });
    });
});

function filtrar(status) {
    const cards = document.querySelectorAll('.card-show');

    for (const card of cards) {
        const cardStatus = card.getAttribute('data-status');

        if (status === 'todos' || status === cardStatus) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    }
}


    // Mesa Filtro

    // function filtrar(categoria) {
    //     const cardContainer = document.getElementById('card-container');
    //     const cards = cardContainer.getElementsByClassName('card-show');

    //     // botões
    //     const btnDisponivel = document.getElementById('filtro-btn-disponivel');
    //     const btnOcupada = document.getElementById('filtro-btn-ocupada');
    //     const btnReservada = document.getElementById('filtro-btn-reservada');


    //     for (const card of cards) {
    //         const categoriaProduto = card.getAttribute('data-categoria');

    //         if (categoria === 'todos' || categoria === categoriaProduto) {
    //             card.style.display = 'block';
    //         } else {
    //             card.style.display = 'none';
    //         }
    //     }

    //     // Remova a classe 'ativo' de todos os botões
    //     btnDisponivel.classList.remove('filtro-ativo');
    //     btnOcupada.classList.remove('filtro-ativo');
    //     btnReservada.classList.remove('filtro-ativo');



    //     // Adicione a classe 'ativo' apenas ao botão clicado
    //     if (categoria === 'disponivel') {
    //     btnDisponivel.classList.add('filtro-ativo');
    //     } else if (categoria === 'ocupada') {
    //     btnOcupada.classList.add('filtro-ativo');
    //     } else if (categoria === 'reservada') {
    //     btnReservada.classList.add('filtro-ativo');
    //     }
    // }

    // function filtrar(status) {
    //     const cardContainer = document.getElementById('card-container');
    //     const cards = cardContainer.getElementsByClassName('card-show');

    //     // Botões de filtro
    //     const btnDisponivel = document.getElementById('filtro-btn-disponivel');
    //     const btnOcupada = document.getElementById('filtro-btn-ocupada');
    //     const btnReservada = document.getElementById('filtro-btn-reservada');

    //     for (const card of cards) {
    //         const statusMesa = card.getAttribute('data-status');

    //         if (status === 'todos' || status === statusMesa) {
    //             card.style.display = 'block';
    //         } else {
    //             card.style.display = 'none';
    //         }
    //     }

    //     // Remova a classe 'filtro-ativo' de todos os botões
    //     btnDisponivel.classList.remove('filtro-ativo');
    //     btnOcupada.classList.remove('filtro-ativo');
    //     btnReservada.classList.remove('filtro-ativo');

    //     // Adicione a classe 'filtro-ativo' apenas ao botão clicado
    //     if (status === 'disponivel') {
    //         btnDisponivel.classList.add('filtro-ativo');
    //     } else if (status === 'ocupada') {
    //         btnOcupada.classList.add('filtro-ativo');
    //     } else if (status === 'reservada') {
    //         btnReservada.classList.add('filtro-ativo');
    //     }
    // }





    // Verificação de usuário
    function acessoNegado() {
        Swal.fire({
            icon: 'error',
            title: 'Acesso Negado!',
            text: 'Você não tem permissão para acessar esta página como Chef de Cozinha.',
        });
    }

    // Obter o elemento onde a data atual será exibida
    var dataAtualElement = document.getElementById('data-atual');

    // Obter a data atual
    var dataAtual = new Date();

    // Array de meses
    var meses = ["JANEIRO", "FEVEREIRO", "MARÇO", "ABRIL", "MAIO", "JUNHO", "JULHO", "AGOSTO", "SETEMBRO", "OUTUBRO", "NOVEMBRO", "DEZEMBRO"];

    // Formatar a data no formato desejado
    var dataFormatada = meses[dataAtual.getMonth()] + ' ' + dataAtual.getDate() + ', ' + dataAtual.getFullYear();

    // Exibir a data atual no elemento
    dataAtualElement.textContent = dataFormatada;






