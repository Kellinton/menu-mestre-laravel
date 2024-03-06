@extends('dashboard.layoutdash.index')

@section('title', 'Dashboard')

@section('conteudo')


<div class="home-container">
    <!-- Container das estatísticas -->
    <div class="home-estatisticas">
        <!-- Cabeçalho com o nome do funcionário e a data atual -->
        <div class="cabecalho-container">
            <h2>👋 Bem-vindo (a), {{ $funcionario -> nomeFuncionario }}</h2>
            <p id="data-atual"></p>
        </div>
        <!-- Container das estatísticas -->
        <div class="estatisticas-container">
            <!-- Estatísticas de mensagens -->
            <div class="estatisticas">
                    <div class="estatisticas-info">
                        <h4>{{ $totalMensagens }}</h4>
                        <span>Mensagens</span>
                        <p>Mensagens recebidas.</p>
                    </div>
                    <div class="estatisticas-icon"  style="background-color: rgba(226, 208, 45, 0.568);">
                        <i class="ri-message-2-fill"  style="color: rgb(226, 208, 45);"></i>
                    </div>
            </div>
            <!-- Estatísticas de acessos -->
            <div class="estatisticas">
                    <div class="estatisticas-info">
                        <h4>{{ $totalAcessos }}</h4>
                        <span>Acessos ao site</span>
                        <p>Número total de visitantes.</p>
                    </div>
                    <div class="estatisticas-icon" style="background-color: rgba(45, 169, 226, 0.568);">
                        <i class="ri-line-chart-line" style="color: rgb(45, 169, 226);"></i>
                    </div>
            </div>
            <!-- Estatísticas de funcionários -->
            <div class="estatisticas">
                <div class="estatisticas-info">
                    <h4>{{ $totalFuncionarios }}</h4>
                    <span>Funcionários</span>
                    <p>Funcionários registrados.</p>
                </div>
                <div class="estatisticas-icon" style="background-color: rgba(179, 8, 8, 0.568)">
                    <i class="ri-user-2-fill" style="color: rgb(179, 8, 8);"></i>
                </div>
            </div>
            <!-- Estatísticas de vendas -->
            <div class="estatisticas">
                <div class="estatisticas-info">
                    <h4>R$ ??</h4>
                    <span>Vendas Totais</span>
                    <p>Vendas totais realizadas.</p>
                </div>
                <div class="estatisticas-icon" style="background-color: rgba(61, 236, 38, 0.568);">
                    <i class="ri-money-dollar-circle-fill" style="color: rgb(61, 236, 38);"></i>
                </div>
            </div>
            <!-- Estatísticas de mesas -->
            <div class="estatisticas">
                    <img src="{{ asset('../assets//images/icones/mesa.png') }}" alt="">
                    <div class="estatisticas-info">
                        <h4>{{ $totalMesas }}</h4>
                        <span>Mesas</span>
                        <p>Mesas disponíveis.</p>
                        <a href="{{ url('/dashboard/administrativo/mesa')}}">Acessar</a>
                    </div>
            </div>
            <!-- Estatísticas de pratos -->
            <div class="estatisticas">
                <img src="{{ asset('../assets//images/icones/burguer.png') }}" alt="">
                <div class="estatisticas-info">
                    <h4>{{ $totalPratos }}</h4>
                    <span>Pratos</span>
                    <p>Itens registrados.</p>
                        <a href="{{ url('/dashboard/administrativo/cardapio')}}">Acessar</a>
                </div>
            </div>
        </div>
    </div>
       <!-- Container dos pratos mais pedidos  -->
    <div class="home-pratos">
    <div class="pratos-container">
            <div class="pratos-info">
            <div>
                <h2>Novidades</h2>
                <p>Últimos pratos adicionados ao cardápio.</p>
            </div>
        </div>

        <div class="pratos-lista">

            @php
            $contador = 0;
            @endphp

            @foreach($cardapio as $item)

                    {{-- Determinar a cor com base na categoria --}}
                    @php
                    $cor = '';
                    switch ($item['categoriaProduto']) {
                        case 'comida':
                            $cor = '#dbd70096';
                        case 'massa':
                        $cor = '#dbd70096';
                        break;
                            break;
                        case 'bebida':
                            $cor = '#009ddb96';
                            break;
                        case 'sobremesa':
                            $cor = '#db000096';
                            break;
                        default:
                            $cor = 'rgba(0, 0, 0, 0.5)'; // Preto como padrão
                    }
                    @endphp

                    <div class="pratos-elemento">
                        <div class="pratos-elemento-info" style="background-color: {{ $cor }}">
                            <div class="categoria-{{ $item['categoriaProduto'] }}" style="background-color: {{ $cor }}">
                                <img src="{{ asset('../assets/images/cardapio/' . $item['fotoProduto']) }}">
                            </div>
                            <div>
                                <h4>{{ $item['nomeProduto'] }}</h4>
                                <p>{{ $item['descricaoProduto'] }}</p>
                            </div>
                        </div>
                        <div class="pratos-elemento-price">
                            <p class="card-new-item">Novo!</p>
                        </div>
                    </div>
            @endforeach

        </div>
    </div>

</div>


@endsection
