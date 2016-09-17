<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soundboks_new
 */

?>

<!--SECTION Fifth FOOTER
    ============================================== -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6  hidden-sm hidden-xs">
                  <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url'); ?>/images/soundboks-black.png" class="img-responsive" alt="logo"></a>
                </div>
                <div class="col-md-6">
                  <nav class="nav-links">
                    <ul class="nav">
                      <li><a href="#">Shop </a></li>
                      <li><a href="#">|</a></li>
                      <li><a href="#">Support </a></li>
                       <li><a href="#">|</a></li>
                      <li><a href="#">Contact </a></li>
                       <li><a href="#">|</a></li>
                      <li><a href="#">About </a></li>
                       <li><a href="#">|</a></li>
                      <li><a href="#">Press</a></li>
                       <li><a href="#">|</a></li>
                      <li><a href="#">Contact</a></li>
                    </ul>
                  </nav>
                </div>
            </div>
            <!-- /.row -->
          <div class="row latest-offer">
             <div class="col-md-6 hidden-sm hidden-xs">
                <h4>Get Latest news and Offers</h4>
                 <div class="form-inline form-discount">
                      <div class="form-group">
                        <div class="input-group">
                          <input type="text" class="form-control" id="exampleInputAmount" placeholder="YOUR EMAIL">
                        </div>
                      </div>
                      <button type="submit" value="subscribe" class="btn btn-subscribe">Subscribe</button>
                      <address>
                        <p>1298 Cuernavaca Circulo</p>
                        <p>94040 Mountain View, California, USA</p>
                      </address>
                  </div>
              </div><!--/**** col-md-6 Latest News end / SUBSCRIBE -->
              <div class="col-md-6">
                <nav class="socials-icons">
                    <ul class="nav">
                      <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/facebok.png" alt="facebook"></a></a></li>
                      <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/instagram.png" alt="facebook"></a></a></li>
                      <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="facebook"></a></li>
                    </ul>
                    <div class="credit">
                      <img src="<?php bloginfo('template_url'); ?>/images/payments-checkouts.png" alt="credit cards" />
                    </div>
                  </nav>
              </div>
           </div>
                <!-- /.row -->
           <div class="row privacy hidden-sm hidden-xs">
            <div class="col-md-6">
              <p>© 2016 SOUNDBOKS, Inc. </p>
            </div>
            <div class="col-md-6 text-right">
              <p>By continuing to use our website you agree to the use of cookies as described in the <a href="#">Privacy Policy</a></p>
            </div>
           </div><!-- /.row -->
        </div>
        <!-- /.container -->
          <div class="loud-music">
            <h3>MADE WITH LOVE AND LOUD MUSIC IN COPENHAGEN</h3>
          </div>
<!--         MOBILE ONLY garanties 
          <div class="container">
            <div class="row hidden-md hidden-lg garanties-mobile">
            <div class="col-md-3 col-xs-4 col-sm-4">
                <div class="icons-i">
                    <img src="<?php bloginfo('template_url'); ?>/images/return-icon.png" alt="big cart" />
                    <h5>30 Days return</h5>
                </div>
            </div>
            <div class="col-md-3 col-xs-4 col-sm-4">
                <div class="icons-i">
                    <img src="<?php bloginfo('template_url'); ?>/images/materials.png" alt="big cart" />
                    <h5>2 Years Warranty</h5>
                </div>
            </div>
            <div class="col-md-3 col-xs-4 col-sm-4 instant-text">
                <div class="icons-i">
                    <img src="<?php bloginfo('template_url'); ?>/images/shipping-icon.png" alt="big cart" />
                    <h5>Worldwide Instant Shipping</h5>
                </div>
            </div>
           </div>
        </div> -->
    </footer>
        <!-- Footer /.-->
  <!--SECTION Fifth FOOTER
    ============================================== -->
</div><!-- #page -->
<!-- jQuery -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-3.1.0.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
    	
    })
    </script>
<?php wp_footer(); ?>

</body>
</html>
