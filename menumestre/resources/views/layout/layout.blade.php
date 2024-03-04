<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href=" {{ asset('../assets/images/favicon.png') }}" type="">

  <title> Menu Mestre - Início </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('../assets/css/bootstrap.css ')}}" />

  <meta name="csrf-token" content="{{ csrf_token() }}">




  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="{{ asset('../assets/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('../assets/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="  {{ asset('../assets/css/responsive.css')}}" rel="stylesheet" />

</head>


<body>
    <div class="hero_area">
        <div class="bg-box">
            <img src="{{ asset('../assets/images/site/fundo.webp') }}" alt="">
        </div>
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{ url('/') }}">
              <span>
                Menu Mestre
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  mx-auto ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/') }}">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#sobre">Sobre</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contato">Contato</a>
                </li>
              </ul>
              {{-- <div class="user_option">
                 <a href="" class="user_link">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </a>
                 <a class="cart_link" href="#">
                  <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
                <a href="" class="order_online">
                  <i class="fa fa-user" aria-hidden="true"></i>Login
                </a>
              </div> --}}
            </div>
          </nav>
        </div>
      </header>

        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Restaurante Menu Mestre
                                        </h1>
                                        <p>
                                            Doloremque, itaque aperiam facilis rerum, comodi, temporibus sapiente ad
                                            mollitia laborum quam quisquam esse erro unde. Tempora ex doloremque, labore,
                                            sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                                        </p>
                                        <div class="btn-box">
                                            <a href="#menu" class="btn1">
                                                Conheça Nosso Menu
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Restaurante Menu Mestre
                                        </h1>
                                        <p>
                                            Doloremque, itaque aperiam facilis rerum, comodi, temporibus sapiente ad
                                            mollitia laborum quam quisquam esse erro unde. Tempora ex doloremque, labore,
                                            sunt repellat dolore, iste magni quos nihil ducimus libero ipsam. </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Peça agora
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Restaurante Menu Mestre
                                        </h1>
                                        <p>
                                            Doloremque, itaque aperiam facilis rerum, comodi, temporibus sapiente ad
                                            mollitia laborum quam quisquam esse erro unde. Tempora ex doloremque, labore,
                                            sunt repellat dolore, iste magni quos nihil ducimus libero ipsam. </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Peça agora
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <ol class="carousel-indicators">
                        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#customCarousel1" data-slide-to="1"></li>
                        <li data-target="#customCarousel1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>

        </section>
        <!-- end slider section -->
    </div>

    <main >
        @yield('conteudo')
    </main>

    <button id="btnVoltarAoTopo" class="btn-voltar-ao-topo" title="Voltar ao Topo">
        <i class="fas fa-arrow-up"></i>
    </button>

    <footer class="footer_section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 footer-col">
              <div class="footer_contact">
                <h4>
                  Contate-nos
                </h4>
                <div class="contact_link_box">
                  <a href="">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                      Location
                    </span>
                  </a>
                  <a href="">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                      Call +01 1234567890
                    </span>
                  </a>
                  <a href="">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                      demo@gmail.com
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 footer-col">
              <div class="footer_detail">
                <a href="" class="footer-logo">
                  Menu Mestre
                </a>
                <p>
                  Necessário, tornando este o primeiro verdadeiro gerador da Internet. Ele usa um dicionário de mais de 200 palavras latinas, combinado com            </p>
                <div class="footer_social">
                  <a href="">
                    <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa-brands fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa-brands fa-pinterest" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 footer-col">
              <h4>
                Horário De Funcionamento          </h4>
              <p>
                Diariamente
              </p>
              <p>
                10 horas - 22 horas
              </p>
            </div>
          </div>
          <div class="footer-info">
            <p>
              &copy; <span id="displayYear"></span> Todos os direitos reservados por
              <a href="#">Web De Quebrada</a>
            </p>
          </div>
        </div>
      </footer>
      <!-- footer section -->

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- jQery -->
      <script src="{{ asset('../assets/js/jquery-3.4.1.min.js') }}"></script>
      <!-- Importe a biblioteca Axios para fazer requisições AJAX -->
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <!-- popper js -->
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
      </script>
      <!-- bootstrap js -->
      <script src="{{ asset('../assets/js/bootstrap.js')}}"></script>
      <!-- owl slider -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
      </script>
      <!-- isotope js -->
      <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
      <!-- nice select -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
       <!-- custom js -->
       <script src="{{ asset('../assets/js/custom.js')}}"></script>
      <!-- Google Map -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
      </script>
      <!-- End Google Map -->

</body>
