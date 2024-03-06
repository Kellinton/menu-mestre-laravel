@extends('dashboard.layoutdash.index')

@section('title', 'Dashboard')

@section('conteudo')

    <link rel="stylesheet" href="{{ asset('../assets/css/cardapio.css') }}">
    <!-- Início do conteúdo HTML -->
    <div class="containerr">

        <!-- Botões de filtro -->
        <div class="filtro-btn-cardapio" id="botoes-filtro">
            <button id="filtro-btn-todos" class="filtro-ativo" data-categoria="todos" title="Todos">
                <i class="ri-file-list-3-fill"></i>
                <span>Todos</span>
            </button>
            <button id="filtro-btn-comida" data-categoria="comida" title="Comida">
                <i class="ri-restaurant-2-fill"></i>
                <span>Comida</span>
            </button>
            <button id="filtro-btn-massa" data-categoria="massa" title="Massa">
                <i class="ri-restaurant-fill"></i>
                <span>Massa</span>
            </button>
            <button id="filtro-btn-bebida" data-categoria="bebida" title="Bebida">
                <i class="ri-goblet-fill"></i>
                <span>Bebida</span>
            </button>
            <button id="filtro-btn-sobremesa" data-categoria="sobremesa" title="Sobremesa">
                <i class="ri-cake-3-fill"></i>
                <span>Sobremesa</span>
            </button>
        </div>




        <!-- Container dos cards de produtos -->
        <div class="container-lista">
            <div class="card-container" id="card-container">
                <!-- Card para adicionar novo prato -->
                <div class="card card-edit" data-toggle="modal" data-target="#create">
                    <a href="#">
                        <div>
                            <span><i class="ri-add-line"></i></span>
                            <span>Adicionar novo prato</span>
                        </div>
                    </a>
                </div>

                @include('dashboard.administrativo.produtos.create')


                <!-- Loop para exibir os cards de produtos -->

                @php
                    $maxId = App\Models\Cardapio::max('idProduto');
                @endphp

                @foreach ($cardapio as $item)
                    <div class="card card-show" data-categoria="{{ $item->categoriaProduto }}">

                        @if (empty($item['statusProduto']) || strtolower($item['statusProduto']) == 'inativo')
                            <!-- Botão de ativação/desativação -->
                            <div class="card-desativado">
                                <a class="card-desativado-btn" title="Desativado (Clique para ativar)"
                                    href="{{ route('ativar.produto', ['idProduto' => $item->idProduto]) }}">
                                    <i class="ri-eye-off-line"></i>
                                </a>
                            </div>
                        @endif


                        <!-- Informações do produto -->
                        <div class="card-info">

                            @if ($item->idProduto == $maxId)
                                <span class="card-new-item">Novo!</span>
                            @endif

                            <a class="card-ativo-btn" title="Ativo (Clique para desativar)"
                                href="{{ route('dashboard.administrativo.cardapio.desativar', ['idProduto' => $item->idProduto]) }}"><i
                                    class="ri-eye-line"></i></a>
                            <img src="{{ asset('../assets/images/cardapio/'. $item['fotoProduto']) }}">
                            <h3>{{ $item->nomeProduto }}</h3>
                            <p>{{ $item->descricaoProduto }}</p>
                            <span class="card-price">R${{ $item->valorProduto }}</span>
                        </div>

                        <!-- Botão de edição -->
                        <div class="card-edit-btn" title="Editar Cardápio" data-toggle="modal" data-target="#edit{{ $item->idProduto }}">
                            {{-- <a title="Editar Cardápio" href=""> --}}
                                <div>
                                    <span><i class="ri-edit-2-line"></i></span>
                                    <span>Editar</span>
                                </div>
                            {{-- </a> --}}
                        </div>
                        @include('dashboard.administrativo.produtos.edit', ['idProduto' => $item->idProduto])
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('sweetalert::alert')
@endsection
