<!doctype html>
<html lang="en">
  <head>
  	<title>Modal 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap" rel="stylesheet">
	
    <link rel="stylesheet" type="text/css" href="{{asset('css_pop/ionicons.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css_pop/flaticon.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css_pop/flaticon.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('css_pop/style.css')}}"/>
  </head>
  <body>
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center js-fullheight">
					<div class="col-md-6 text-center d-flex align-items-center">
						<div class="wrap w-100">
							<h2 class="mb-2">Modal 04</h2>
							<button type="button" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#exampleModalCenter">
							  Launch Modal 04
							</button>

							<!-- Modal -->
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true" class="ion-ios-close"></span>
		        </button>
		      </div>
		      <div class="row no-gutters">
			      <div class="col-md-6 d-flex">
				      <div class="modal-body p-5 img d-flex" style="background-image: url(images/bg-1.jpg);">
				      </div>
				    </div>
				    <div class="col-md-6 d-flex">
				      <div class="modal-body p-5 d-flex align-items-center">
				      	<div class="text w-100 text-center py-5">
				      		<h2 class="mb-0">50<span>%</span> Off</h2>
				      		<h4 class="mb-4">On all Colorlib Brands</h4>
				      		<form action="#" class="code-form">
		                <div class="form-group d-flex">
		                  <input type="text" class="form-control" placeholder="Enter code">
		                </div>
		              </form>
				      		<a href="#" class="btn btn-primary d-block py-3">Start Shopping</a>
				      	</div>
				      </div>
				    </div>
				  </div>
		    </div>
		  </div>
		</div>

    <script src="{{asset('js_pop/jquery.min.js')}}"></script>
    <script src="{{asset('js_pop/popper.js')}}"></script>
    <script src="{{asset('js_pop/bootstrap.min.js')}}"></script>
    <script src="{{asset('js_pop/main.js')}}"></script>
  </body>
</html>