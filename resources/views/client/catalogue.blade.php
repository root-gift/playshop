@extends('client.layouta')
@section('contenu')
<!-- inner page section -->
<section class="inner_page_head">
   <div class="container_fuild">
      <div class="row">
         <div class="col-md-12">
            <div class="full">
               <h3>Catalogue</h3>
               <ul class="product-category">
                  <li><a href="{{URL::to('/catalogue')}}" class="{{ Request::is('/catalogue') ? '' : ''}}">Tout/</a></li>
                  @foreach ($categories as $categorie)
                  <span>  <li><a href="/catalogue/{{ $categorie->category_name}}" class="{{Request::is('/select-par-cat/'.$categorie->category_name) ? 'active' : ''}}">{{$categorie->category_name}}/</a></li></span>
                  @endforeach
               </ul>   
            </div>
         </div>
         
      </div>
   </div>
</section>
<!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Nos <span>produits</span>
               </h2>
            </div>
            <div class="row">
               @foreach ($produits as $produit)
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
                        <img src="/storage/product_images/{{ $produit->product_image }}" alt="">
                        
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{ $produit->product_name }}
                        </h5>
                        <h6 style="color:red">
                           ${{ $produit->product_price }}
                        </h6>
                     </div>
                  </div>
               </div>
               @endforeach
               
            </div>
            <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div>
         </div>
      </section>
      <!-- end product section -->
      @endsection