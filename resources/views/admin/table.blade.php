
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <title>
    Table
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
@include('include.navbar1')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('include.nav')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Liste des catégories</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                {!!Form::hidden('', $increment =1)!!}

                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ordre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nom de la catégories</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $categorie)

                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$increment}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$categorie->category_name}}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                            <button class="btn btn-outline-primary" onclick="window.location = '{{url('edit_categorie/'.$categorie->id)}}'">Editer</button>
                            <button class="btn btn-outline-danger"><a href="{{url('supprimercategorie/'.$categorie->id)}}" id="delete">Supprimer</a></button> 
                        </td>
                    </tr>
                    {!!Form::hidden('', $increment++)!!}
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Liste des produits</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                {!!Form::hidden('', $increment =1)!!}
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ordre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom du produit</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Categorie du produit</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Prix</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Quantité</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($produits as $produit)
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">{{$increment}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                          <a href="{{url('/admin/produits/recommandation/'.$produit->id)}}">
                            <div>
                                <img src="/storage/product_images/{{$produit->product_image}}" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                              </div>
                          </a>
                        <p class="text-sm font-weight-bold mb-0"></p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">{{$produit->product_name}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">{{$produit->product_category}}</span>
                          <div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">{{$produit->product_price}}</span>
                          <div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">{{$produit->product_qty}}</span>
                          <div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            @if ($produit->status==1)
                            <label class="badge badge-success">Activer</label>            
                        @else
                          <label class="badge badge-danger">Desactiver</label> 
                        @endif
                          <div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-outline-primary" onclick="window.location = '{{url('edit_produit/'.$produit->id)}}'">Editer</button>
                        <button class="btn btn-outline-danger"><a href="{{url('supprimerproduit/'.$produit->id)}}" id="delete">Supprimer</a></button>
                        @if ($produit->status==1)
                          <button class="btn btn-outline-warning" onclick="window.location = '{{url('desactiver_produit/'.$produit->id)}}'">Desactiver</button>
                        @else
                            <button class="btn btn-outline-success" onclick="window.location = '{{url('activer_produit/'.$produit->id)}}'">Activer</button>
                        @endif
                      </td>
                    </tr>
                    {!!Form::hidden('', $increment++)!!}
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('include.footer')
    </div>
  </main>
@include('include.config')
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>