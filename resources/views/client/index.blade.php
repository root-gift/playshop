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
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>PLAYSHOP</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <link href="css/stylea.scss" rel="stylesheet" />
      <link href="css/style.scss" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap" rel="stylesheet">
	
    <link rel="stylesheet" type="text/css" href="{{asset('css_pop/ionicons.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css_pop/flaticon.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css_pop/flaticon.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('css_pop/style.css')}}"/>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="#"><img width="250" src="{{asset('images/playshop.png')}}" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{url('/')}}">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('/catalogue')}}">Catalogue</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('/about')}}">A propos de nous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Connexion</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                 <g>
                                    <g>
                                       <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                          c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                          C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                          c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                          C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                          c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                    </g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                              </svg>
                           </a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
         {{-- popup section --}}
         @foreach($product as $prod)
         <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close d-flex align-items-center btn-warning justify-content-center" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="ion-ios-close"></span>
                  </button>
                </div>
                <div class="row no-gutters">
                   <div class="col-md-6 d-flex">
                      <img class="modal-body" src="/storage/product_images/{{ $prod->product_image }}" alt="">
                      {{-- <div  style="background-image: url(images/bg-1.jpg);"> --}}
                      </div>
                    </div>
                    <div class="col-md-6 d-flex">
                      <div class="modal-body p-5 d-flex align-items-center">
                         <div class="text w-100 text-center py-5">
                            <h2 class="mb-0">20<span>%</span> </h2>
                            <h4 class="mb-4">De reduction</h4>
                            <div class="align-items-center">
                              <span id="titre_produit">TITRE</span>
                              <br>
                              <span id="description">Description</span>
                              @if ($prod->status==1)
                                 <label class="badge badge-success">Disponible</label>            
                              @else
                                 <label class="badge badge-danger">En rupture</label>
                              @endif
                             </div>
                             <br>
                             <div class="align-items-center">
                              <a href="#" class="btn btn-warning d-block py-3 w-60">Ajouter au panier</a>
                             </div>
                            <form action="#" class="code-form">
                            </form>
                        
                         </div>
                      </div>
                    </div>
                  </div>
                  
                  
              </div>
            </div>
          </div>
          @endforeach
         {{-- end popup section --}}
         <!-- slider section -->
         <section class="slider_section ">
            <div class="slider_bg_box">
               <img src="images/slider-bg.jpg" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    Reduction de20%
                                    </span>
                                    <br>
                                    Sur Tout!
                                 </h1>
                                 <p>
                                   Playshop on s'amuse à l'achat!
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                     Achetez
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
                                    <span>
                                    Reduction de20%
                                    </span>
                                    <br>
                                    Sur Tout!
                                 </h1>
                                 <p>
                                   Playshop on s'amuse à l'achat!
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                     Achetez
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
                                    <span>
                                    Reduction de20%
                                    </span>
                                    <br>
                                    Sur Tout!
                                 </h1>
                                 <p>
                                   Playshop on s'amuse à l'achat!
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                     Achetez
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
      
      
      <!-- arrival section -->
      <section class="arrival_section">
         <div class="container">
            <div class="box">
               <div class="arrival_bg_box">
                  <img src="images/arrival-bg.png" alt="">
               </div>
               <div class="row">
                  <div class="col-md-6 ml-auto">
                     <div class="heading_container remove_line_bt">
                        <h2>
                           #Nouveautés
                        </h2>
                     </div>
                     <p style="margin-top: 20px;margin-bottom: 30px;">
               
                     </p>
                     <a href="">
                     Achetez maintenant
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end arrival section -->
      
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Nos <span>produits</span>
               </h2>
            </div>
            <div class="section-produit">
               <div class="row">
                  @foreach ($product as $products)
                  <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="box">
                        <div class="option_container">
                           <div class="options">
                              <a href="" class="option1" data-toggle="modal" data-target="#exampleModalCenter">
                              Description
                              </a>
                              <a href="" class="option2">
                              panier
                              </a>
                           </div>
                        </div>
                        <div class="img-box">
                           <img src="/storage/product_images/{{ $products->product_image }}" alt="">
                           
                        </div>
                        <div class="detail-box">
                           <h5>
                              {{ $products->product_name }}
                           </h5>
                           <h6 style="color:red">
                              ${{ $products->product_price }}
                           </h6>
                        </div>
                     </div>
                  </div>
                  @endforeach

                  
               </div>
         </div>
            <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div>
         </div>
      </section>
      <!-- end product section -->

      <!-- subscribe section -->

      <!-- end subscribe section -->
      <!-- client section -->
      <section class="client_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Customer's Testimonial
               </h2>
            </div>
            <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="images/client.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                           Anna OUEDRAOGO
                           </h5>
                           <h6>
                              Client
                           </h6>
                           <p>
                              Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="images/client.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Anna OUEDRAOGO
                           </h5>
                           <h6>
                              Client
                           </h6>
                           <p>
                              Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="images/client.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Anna ZONGO
                           </h5>
                           <h6>
                              Client
                           </h6>
                           <p>
                              Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel_btn_box">
                  <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                  <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                  <span class="sr-only">Precedent</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  <span class="sr-only">Suivant</span>
                  </a>
               </div>
            </div>
         </div>
      </section>
       <!-- end client section -->
      {{-- DIV interface produit --}}
     
      <!-- footer start -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#"><img width="210" src="{{asset('images/playshop.png')}}" alt="#" /></a>
                      </div>
                      <div class="information_f">
                        <p><strong>TELEPHONE:</strong> +226 64 65 53 15 / 07 09 65 85</p>
                        <p><strong>EMAIL1:</strong> michaelrogerzongo@gmail.com</p>
                        <p><strong>EMAIL2:</strong> dipamafrederic07@gmail.com</p>
                      </div>
                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="#">Accueil</a></li>
                           <li><a href="#">A propos</a></li>
                           <li><a href="#">Catalogue</a></li>
                           <li><a href="#">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Account</h3>
                        <ul>
                           <li><a href="#">Compte</a></li>
                           <li><a href="#">Panier</a></li>
                           <li><a href="#">Connexion</a></li>
                           <li><a href="#">Inscription</a></li>
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>Newsletter</h3>
                        <div class="information_f">
                          <p>Souscrivez à notre news letters.</p>
                        </div>
                        <div class="form_sub">
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="Enter Your Mail" name="email" />
                                    <input type="submit" value="Subscribe" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>

         
      </footer>
      <!-- footer end -->
      <div class="cpy_">
         <p>© Décembre 2021 propulsé par<a style="color:orange;"> DIPAMA FREDERIC & ZONGO MICHAEL ROGER</a></p>
      </div>
      <!-- jQery -->
      <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{asset('js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{asset('js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{asset('js/custom.js')}}"></script>
      <script src="{{asset('js_pop/jquery.min.js')}}"></script>
      <script src="{{asset('js_pop/popper.js')}}"></script>
      <script src="{{asset('js_pop/bootstrap.min.js')}}"></script>
      <script src="{{asset('js_pop/main.js')}}"></script>
      
   </body>
</html>