@yield('footer')
<!-- footer section -->
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
  <!-- footer section -->
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>
</html>