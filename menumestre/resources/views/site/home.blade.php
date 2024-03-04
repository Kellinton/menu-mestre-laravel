@extends('layout.layout')

@section('title', 'Home')

@section('conteudo')





    <!-- offer section -->

    {{-- <section class="offer_section layout_padding-bottom" id="menu">
        <div class="offer_container">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6  ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('../assets/images/o1.jpg') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Quintas-feiras saborosas
                                </h5>
                                <h6>
                                    <span>20%</span> Off
                                </h6>
                                <a href="">
                                    Peça agora<i class="fa-solid fa-cart-shopping"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6  ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('../assets/images/o2.jpg') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Dias de Pizza
                                </h5>
                                <h6>
                                    <span>15%</span> Off
                                </h6>
                                <a href="">
                                    Peça agora <i class="fa-solid fa-cart-shopping"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <section id="our_menu" class="pt-5 pb-5" >
        <div class="container" id="menu">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page_title text-center mb-4">
                        <h1>Nosso Menu</h1>
                        <div class="single_line"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="nav nav-tabs menu_tab mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="prato-tab" data-toggle="tab" href="#prato" role="tab">Pratos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="massa-tab" data-toggle="tab" href="#massa" role="tab">Massas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="bebida-tab" data-toggle="tab" href="#bebida" role="tab">Bebidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="sobremesa-tab" data-toggle="tab" href="#sobremesa" role="tab">Sobremesas</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="tab-content col-lg-12" id="myTabContent">

                    {{-- Pratos --}}

                    <div class="tab-pane fade show active" id="prato" role="tabpanel" aria-labelledby="prato-tab">
                        <div class="row">
                            @php
                                $pratosArray = $pratos->toArray();
                                $pratosChunked = array_chunk($pratosArray, 2);
                            @endphp
                            @foreach($pratosChunked as $par)
                            <div class="col-md-6">
                                @foreach ($par as $prato)
                                <div class="single_menu">
                                    <img src="{{ asset('../assets/images/produtos/comida/' . $prato['fotoProduto']) }}" alt="burger">
                                    <div class="menu_content">
                                        <h4>{{ $prato['nomeProduto'] }} <span>R${{ $prato['valorProduto'] }}</span></h4>
                                        <p>{{ $prato['descricaoProduto'] }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Massas --}}

                    <div class="tab-pane fade" id="massa" role="tabpanel" aria-labelledby="massa-tab">
                        <div class="row">
                            @php
                                $massasArray = $massas->toArray();
                                $massasChunked = array_chunk($massasArray, 2);
                            @endphp
                            @foreach($massasChunked as $par)
                            <div class="col-md-6">
                                @foreach ($par as $massa)
                                <div class="single_menu">
                                    <img src="{{ asset('../assets/images/produtos/massa/' . $massa['fotoProduto']) }}" alt="massa">
                                    <div class="menu_content">
                                        <h4>{{ $massa['nomeProduto'] }} <span>R${{ $massa['valorProduto'] }}</span></h4>
                                        <p>{{ $massa['descricaoProduto'] }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Bebidas --}}

                    <div class="tab-pane fade" id="bebida" role="tabpanel" aria-labelledby="bebida-tab">
                        <div class="row">
                            @php
                                $bebidasArray = $bebidas->toArray();
                                $bebidasChunked = array_chunk($bebidasArray, 2);
                            @endphp
                            @foreach($bebidasChunked as $par)
                            <div class="col-md-6">
                                @foreach ($par as $bebida)
                                <div class="single_menu">
                                    <img src="{{ asset('../assets/images/produtos/bebida/' . $bebida['fotoProduto']) }}" alt="bebida">
                                    <div class="menu_content">
                                        <h4>{{ $bebida['nomeProduto'] }} <span>R${{ $bebida['valorProduto'] }}</span></h4>
                                        <p>{{ $bebida['descricaoProduto'] }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Sobremesas --}}

                    <div class="tab-pane fade" id="sobremesa" role="tabpanel" aria-labelledby="sobremesa-tab">
                        <div class="row">
                            @php
                                $sobremesasArray = $sobremesas->toArray();
                                $sobremesasChunked = array_chunk($sobremesasArray, 2);
                            @endphp
                            @foreach($sobremesasChunked as $par)
                            <div class="col-md-6">
                                @foreach ($par as $sobremesa)
                                <div class="single_menu">
                                    <img src="{{ asset('../assets/images/produtos/sobremesa/' . $sobremesa['fotoProduto']) }}" alt="sobremesa">
                                    <div class="menu_content">
                                        <h4>{{ $sobremesa['nomeProduto'] }} <span>R${{ $sobremesa['valorProduto'] }}</span></h4>
                                        <p>{{ $sobremesa['descricaoProduto'] }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
    </section>

    <!-- fim cardapio section -->

    <!-- sobre section -->

    <section class="about_section layout_padding" id="sobre">
        <div class="container  ">

            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        {{-- <img src="{{ asset('../assets/images/about-img.png') }}" alt=""> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Nós somos Menu Mestre </h2>
                        </div>
                        <p>
                            Existem muitas variações de passagens de Lorem Ipsum disponíveis, mas a maioria sofreu
                            alterações
                            de alguma forma, por meio de humor injetado ou palavras aleatórias que não parecem nem um pouco
                            verossímeis. Se você
                            usar uma passagem de Lorem Ipsum, você precisa ter certeza de que não há nada embaraçoso
                            escondido
                            no meio do texto. Todos
                        </p>
                        <a href="">
                            consulte Mais informação </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- fim sobre section -->

    <!-- contato section -->
    <section class="book_section layout_padding" id="contato">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Entre Em Contato
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container">
                        <form action="{{ route('contato.enviar') }}" method="POST" id="formContato">
                            @csrf
                            <div>
                                <input type="text" name="nomeContato" id="nomeContato" class="form-control"
                                    placeholder="Seu Nome" value="{{ old('nomeContato') }}">
                                <div id="nomeContatoError" class="error-mensagem"></div>
                            </div>
                            <div>
                                <input type="email" name="emailContato" id="emailContato" class="form-control"
                                    placeholder="Seu Email" value="{{ old('emailContato') }}">
                                <div id="emailContatoError" class="error-mensagem"></div>
                            </div>
                            <div>
                                <input type="text" name="foneContato" id="foneContato" class="form-control"
                                    placeholder="Telefone" value="{{ old('foneContato') }}">
                            </div>

                            {{-- opção de selecionar o tipo de assunto do contato --}}

                            <div>
                                <select name="assuntoContato" id="assuntoContato" class="form-control"
                                    value="{{ old('assuntoContato') }}">
                                    <option value="" disabled="" selected="" hidden="">Selecione o
                                        assunto</option>
                                    <option value="Feedback">Feedback</option>
                                    <option value="Pedidos e consultas sobre o cardápio">Pedidos e consultas sobre o
                                        cardápio</option>
                                    <option value="Suporte ao cliente">Suporte ao cliente</option>
                                    <option value="Trabalhe conosco">Trabalhe conosco</option>
                                </select>
                                <div id="assuntoContatoError" class="error-mensagem"></div>
                            </div>
                            <div>
                                <textarea name="mensContato" id="mensContato" cols="30" rows="10" class="form-control textarea"
                                    placeholder="Digite a sua mensagem">{{ old('mensContato') }}</textarea>
                                <div id="mensContatoError" class="error-mensagem"></div>
                            </div>
                            <div class="btn_box">
                                <button type="submit" onclick="formContato(event)">Enviar via e-mail</button>
                                <div id="contatoMensagem" class="msgContato"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_container ">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fim contato section -->


@endsection
