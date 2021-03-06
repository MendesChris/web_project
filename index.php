<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JoFruits - INICIO</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="js/validation.js"></script> 
  </head>  
  
  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->

  	<!--<a target="_blank" class="hide-s" href="../template/prospera-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <!-- HEADER -->
    <header role="banner">    
      <!-- Top Bar -->
      <div class="top-bar background-white">
        <div class="line">
          <div class="s-12 m-6 l-6">
            <div class="top-bar-contact">
              <?php
                session_start();
                if(!isset($_SESSION['msg']) == true){
                  echo "";  

                }else{
                  echo $_SESSION['msg'];
                                ?>  
              <form action="valida.php" method="POST">  
              <a href="logout.php" type="btn" class="btn btn-default">Deslogar</a>
              </form>
              <?php
                }
              ?>  
              <p class="text-size-12">Contate-nos: 0800 200 200 | <a class="text-orange-hover" href="mailto:jofruits@frutaria.com">jofruits@frutaria.com</a></p>
              <a class="text-orange-hover" href="logout.php"></a>

            </div>
          </div>
          <!--<div class="s-12 m-6 l-6">
            <div class="right">
              <ul class="top-bar-social right">
                <li><a href="/"><i class="icon-facebook_circle text-orange-hover"></i></a></li>
                <li><a href="/"><i class="icon-twitter_circle text-orange-hover"></i></a> </li>
                <li><a href="/"><i class="icon-google_plus_circle text-orange-hover"></i></a></li>
                <li><a href="/"><i class="icon-instagram_circle text-orange-hover"></i></a></li>
              </ul>
            </div>
          </div>-->
        </div>
      </div>
      
      <!-- Top Navigation -->
      <nav class="background-white background-primary-hightlight">
        <div class="line">
          <div class="s-12 l-2">
            <a href="index.html" class="logo"><img src="img/logo-jofruits.png" alt=""></a>
          </div>
          <div class="top-nav s-12 l-10">
            <p class="nav-text"></p>
            <ul class="right chevron">
              <li><a href="index.html">In??cio</a></li>
              <li><a href="products.html">Produtos</a></li>
              <?php
                if(!isset($_SESSION['msg']) == true){
                  echo "";
              ?>
              <li><a href="login.php">Login</a></li>
              <?php
                }else{
                  echo "";
                }
              ?>  

              <!--<li><a>Services</a>
                <ul>
                  <li><a>Service 1</a>
                    <ul>
                      <li><a>Service 1 A</a></li>
                      <li><a>Service 1 B</a></li>
                    </ul>
                  </li>
                  <li><a>Service 2</a></li>
                </ul>-->
              </li>
              <li><a href="about.html">Sobre</a></li>
              <!--<li><a href="gallery.html">Gallery</a></li>-->
              <li><a href="contact.html">Contato</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">
      <!-- Main Carousel -->
      <section class="section background-dark">
        <div class="line">
          <div class="carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-wide-arrows">
            <div class="item">
              <div class="s-12 center">
                <img src="img/01-boxed-1.jpg" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8">
                      <p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1">JoFruits</p>
                      <p class="text-white text-size-16 margin-bottom-40">Frutas frescas em casa nunca foi t??o f??cil!<br><br> Confira nossos produtos!</p>  
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="s-12 center">
                <img src="img/delivery-0.jpg" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8">
                      <p class="text-black text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1">Cadastre-se j??!</p>
                      <p class="text-black text-size-16 margin-bottom-30">Agilize seu acesso na hora de finalizar seu pedido, entre j?? na ??rea de cadastro e fa??a seu registro!</p>    
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </section>
      
      <!-- Section 1 -->
      <section class="section background-white"> 
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <img class="margin-bottom" src="img/img-01-01.jpg" alt="">
              <h2 class="text-thin">Produtos</h2>
              <p>Confira nosso setor de produtos completo e separe j?? sua encomenda!</p> 
              <a class="text-more-info text-primary-hover" href="products.html">Conferir</a>                
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <img class="margin-bottom" src="img/img-02-02.jpg" alt="">
              <h2 class="text-thin">Cadastro</h2>
              <p>Crie j?? seu cadastro! N??o perca tempo e registre-se j?? para agilizar sua navega????o!</p> 
              <a class="text-more-info text-primary-hover" href="login.php">Cadastrar</a>                
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <img class="margin-bottom" src="img/img-03.jpg" alt="">
              <h2 class="text-thin">Sobre N??s</h2>
              <p>Conhe??a mais sobre nossa companhia!</p> 
              <a class="text-more-info text-primary-hover" href="about.html">Leia Mais</a>                
            </div>
          </div>
        </div>
      </section>
      
      <!-- Section 2 -->
      <section class="section background-primary text-center">
        <div class="line">
          <div class="s-12 m-10 l-8 center">
            <h2 class="headline text-thin text-s-size-30">A J?? Fits ?? uma empresa tecnol??gica e ecol??gica</h2>
            <p class="text-size-20">Todos os produtos do cat??logo s??o naturais e org??nicos (livre de agrot??xico).</p>
          </div>
        </div>  
      </section>
      
      <!-- Section 3 -->
      <section class="section background-white">
        <div class="full-width text-center">
          <img class="center margin-bottom-30" style="margin-top: -210px;" src="img/bio.png" alt="">
          <div class="line">
            <h2 class="headline text-thin text-s-size-30">Somos <span class="text-primary">Qualidade e Praticidade</span> Para Voc??</h2>
            <p class="text-size-20 text-s-size-16 text-thin">A J?? Fitz tem o objetivo de mudar a forma do consumidor em adquirir
alimentos e conscientizar o p??blico para uma alimenta????o saud??vel. Com pr??ticas
de sustentabilidade, seremos uma empresa de refer??ncia em alimenta????o saud??vel,
com a miss??o em ser l??der no mercado de vendas aliment??cios. Entregar ao cliente
uma nova experi??ncia de compras, com um mix de produtos naturais, visando a
atender as necessidades dos clientes e procurando a excel??ncia no atendimento e
entrega com foco em prazo e qualidade dos produtos.</p>
            <!--<i class="icon-more_node_links icon2x text-primary margin-top-bottom-10"></i>
            <p class="text-size-20 text-s-size-16 text-thin text-primary">Try resize your browser window</p>-->
          </div>  
        </div>  
      </section>
      <hr class="break margin-top-bottom-0">
      
      <!-- Section 4 --> 
      <!-- <section class="section background-white">
        <div class="line">
          <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">From Our <span class="text-primary">Blog</span></h2>
          <div class="carousel-default owl-carousel carousel-wide-arrows">
            <div class="item">
              <div class="margin"> 
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius margin-m-bottom">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="img/blog-05.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8 margin-m-bottom">
                        <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="/">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div>
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="img/blog-03.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8">
                        <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="/">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div> 
              </div>
            </div>
            <div class="item"> 
              <div class="margin"> 
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius margin-m-bottom">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="img/blog-04.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8 margin-m-bottom">
                        <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="/">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div>
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="img/blog-02.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8">
                        <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="/">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div> 
              </div>
            </div>
            <div class="item">
              <div class="margin"> 
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius margin-m-bottom">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="img/blog-01.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8 margin-m-bottom">
                        <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="/">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div>
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="img/blog-06.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8">
                        <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="/">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>    
      </section>
      
    </main>
            -->
    
    <!-- FOOTER -->
    <footer>
      <!-- Social -->
      <div class="background-primary padding text-center">
        <a href="/"><i class="icon-facebook_circle icon2x text-white"></i></a> 
        <a href="/"><i class="icon-twitter_circle icon2x text-white"></i></a>
        <a href="/"><i class="icon-google_plus_circle icon2x text-white"></i></a>
        <a href="/"><i class="icon-instagram_circle icon2x text-white"></i></a>                                                                        
      </div>
      
      <!-- Main Footer -->
      <section class="section background-dark">
        <div class="line">
          <div class="margin">
            <!-- Collumn 1 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">Nosso Foco</h4>
              <p class="text-size-20"><em>Queremos oferecer um servi??o de qualidade, e disponibilizar aos clientes uma
forma simples e r??pida de obter produtos frescos, saud??veis e naturais. Contribuindo
diretamente e indiretamente com enfrentamento da pandemia.</em><p>
                            
              <div class="line">
                <h4 class="text-uppercase text-strong margin-top-30">Sobre nossa Companhia</h4>
                <div class="margin">
                  <div class="s-12 m-12 l-4 margin-m-bottom">
                    <a class="image-hover-zoom" href="/"><img src="img/blog-04.jpg" alt=""></a>
                  </div>
                  <div class="s-12 m-12 l-8 margin-m-bottom">
                    <p>A ideia que nos impulsionou para a J?? Fits surgiu a partir de uma car??ncia identificada no com??rcio aliment??cio...</p>
                    <a class="text-more-info text-primary-hover" href="about.html">Leia mais</a>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Collumn 2 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">Contato</h4>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-placepin text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Endere??o:</b> Rua da Feira 7, S??o Paulo</p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-mail text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="/" class="text-primary-hover"><b>E-mail:</b> jofruits@frutaria.com</a></p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-smartphone text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Telefone:</b> 0800 200 200</p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-twitter text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="/" class="text-primary-hover"><b>Twitter</b></a></p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-facebook text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11">
                  <p><a href="/" class="text-primary-hover"><b>Facebook</b></a></p>
                </div>
              </div>
            </div>
            
            <!-- Collumn 3 -->
            <div class="s-12 m-12 l-4">
              <h4 class="text-uppercase text-strong">Deixe uma Mensagem</h4>
              <form class="customform text-white">
                <div class="line">
                  <div class="margin">
                    <div class="s-12 m-12 l-6">
                      <input name="email" class="required email border-radius" placeholder="Seu e-mail" title="Your e-mail" type="text" />
                    </div>
                    <div class="s-12 m-12 l-6">
                      <input name="name" class="name border-radius" placeholder="Seu nome" title="Your name" type="text" />
                    </div>
                  </div>
                </div>
                <div class="s-12">
                  <textarea name="message" class="required message border-radius" placeholder="sua mensagem" rows="3"></textarea>
                </div>
                <div class="s-12"><button class="submit-form button background-primary border-radius text-white" type="submit">Enviar</button></div> 
              </form>
            </div>
          </div>
        </div>
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      <!-- Bottom Footer 
      <section class="padding background-dark">
        <div class="line">
          <div class="s-12 l-6">
            <p class="text-size-12">Copyright 2019, Vision Design - graphic zoo</p>
            <p class="text-size-12">All images have been purchased from Bigstock. Do not use the images in your website.</p>
          </div>
          <div class="s-12 l-6">
            <a class="right text-size-12" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding<br> by Responsee Team</a>
          </div>
        </div>
      </section>-->
    </footer> 
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>   
   </body>
</html>