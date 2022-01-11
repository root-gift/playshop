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
            </div
         </div>
         
      </div>
   </div>
</section>
{{-- @foreach ($categories as $cat)
   @if(route::get())
      
   @endif
   <h3 align="center">{{ $categorie->category_name}}</h3>
@endforeach --}}


{{-- popup section --}}
@foreach($produits as $prod)

<div class="modal fade" id="exampleModalCenter{{ $prod->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close d-flex align-items-center btn-warning justify-content-center" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="ion-ios-close"></span>
         </button>
       </div>
       <div class="row no-gutters">
          <div class="col-md-6 d-flex">
             <img class="modal-body" src="/storage/product_images/{{ $prod->product_image }}" width="300" height="350" alt="">
             {{-- <div  class="modal-body" > --}}
             {{-- </div> --}}
           </div>
           <div class="col-md-6 d-flex">
             <div class="modal-body p-5 d-flex align-items-center">
                <div class="text w-100 text-center py-5">
                   <h2 class="mb-0">20<span>%</span> </h2>
                   <h4 class="mb-4">De reduction</h4>
                   <div class="align-items-center">
                     <span id="titre_produit">{{ $prod->product_name }}</span>
                     <br>
                     <span id="description" style="color:red">${{ $prod->product_price }}</span>
                     <br>
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
               {{-- @if($categorie->category_name === 'Tout') --}}
                  
               @foreach ($produits as $produit)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1" data-toggle="modal" data-target="#exampleModalCenter{{ $produit->id }}">
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
               {{-- @endif    --}}
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