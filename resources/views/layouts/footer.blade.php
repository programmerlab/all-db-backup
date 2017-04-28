 <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="##" class="image"> <img data-echo="{{ asset('public/enduser/assets/images/brands/brand1.png') }}" src="{{ asset('public/enduser/assets/images/blank.gif') }}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-10"> <a href="##" class="image"> <img data-echo="{{ asset('public/enduser/assets/images/brands/brand2.png') }}" src="{{ asset('public/enduser/assets/images/blank.gif') }}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="##" class="image"> <img data-echo="{{ asset('public/enduser/assets/images/brands/brand3.png') }}" src="{{ asset('public/enduser/assets/images/blank.gif') }}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="##" class="image"> <img data-echo="{{ asset('public/enduser/assets/images/brands/brand4.png') }}" src="{{ asset('public/enduser/assets/images/blank.gif') }}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="##" class="image"> <img data-echo="{{ asset('public/enduser/assets/images/brands/brand5.png') }}" src="{{ asset('public/enduser/assets/images/blank.gif') }}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="##" class="image"> <img data-echo="{{ asset('public/enduser/assets/images/brands/brand6.png') }}" src="{{ asset('public/enduser/assets/images/blank.gif') }}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="##" class="image"> <img data-echo="{{ asset('public/enduser/assets/images/brands/brand2.png') }}" src="{{ asset('public/enduser/assets/images/blank.gif') }}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="##" class="image"> <img data-echo="{{ asset('public/enduser/assets/images/brands/brand4.png') }}" src="{{ asset('public/enduser/assets/images/blank.gif') }}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="##" class="image"> <img data-echo="{{ asset('public/enduser/assets/images/brands/brand1.png') }}" src="{{ asset('public/enduser/assets/images/blank.gif') }}" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="##" class="image"> <img data-echo="{{ asset('public/enduser/assets/images/brands/brand5.png') }}" src="{{ asset('public/enduser/assets/images/blank.gif') }}" alt=""> </a> </div>
          <!--/.item--> 
        </div>
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /#top-banner-and-menu --> 

<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Contact Us</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class="toggle-footer" style="">
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inveRSe"></i> </span> </div>
                <div class="media-body">
                  <p>  
                  {!! isset($company_address->field_value)?$company_address->field_value:"Indore MP 452001" !!}
                  </p>
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inveRSe"></i> </span> </div>
                <div class="media-body">
                  <p> 
                  {{ isset($contact_number->field_value)?$contact_number->field_value:"+91-7067777832" }} 

                    </p> 
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inveRSe"></i> </span> </div>
                <div class="media-body"> <span><a href="#"> {{ isset($website_email->field_value)?$website_email->field_value:"info@shopersquare.com" }}</a></span> </div>
              </li>
               <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inveRSe"></i> </span> </div>
                <div class="media-body"> <span><a href="http://www.shopersquare.com">
                  {{ isset($website_url->field_value)?$website_url->field_value:"www.shopersquare.com" }}
                

                </a></span> </div>
              </li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Customer Service</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="fiRSt"><a href="myaccount" title="Contact us">My Account</a></li>
              <li><a href="##" title="About us">Order History</a></li>
              <li><a href="{{url('faq')}}" title="faq">FAQ</a></li> 
              <li class="last"><a href="##" title="Where is my order?">Help Center</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Corporation</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="fiRSt"><a title="Your Account" href="##">About us</a></li>
              <li><a title="Information" href="##">Customer Service</a></li>
              <li><a title="Addresses" href="##">Company</a></li>
              <li><a title="Addresses" href="##">Investor Relations</a></li> 
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Why Choose Us</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li><a href="##" title="Blog">Blog</a></li>
              <li><a href="##" title="Company">Company</a></li>
              <li><a href="##" title="Investor Relations">Investor Relations</a></li>
              <li class=" last"><a href="contact-us.html" title="SupplieRS">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
      </div>
    </div>
  </div>
  <div class="copyright-bar">
    <div class="container">
      <div class="col-xs-12 col-sm-6 no-padding social">
        <ul class="link">
          <li class="fb pull-left"><a target="_blank" rel="nofollow" href="##" title="Facebook"></a></li>
          <li class="tw pull-left"><a target="_blank" rel="nofollow" href="##" title="Twitter"></a></li>
          <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="##" title="GooglePlus"></a></li>
          <li class="RSs pull-left"><a target="_blank" rel="nofollow" href="##" title="RSS"></a></li>
          <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="##" title="PInterest"></a></li>
          <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="##" title="Linkedin"></a></li>
          <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="##" title="Youtube"></a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-6 no-padding">
        <div class="clearfix payment-methods">
          <ul>
            <li><img src="{{ asset('public/enduser/assets/images/payments/1.png') }}" alt=""></li>
            <li><img src="{{ asset('public/enduser/assets/images/payments/2.png') }}" alt=""></li>
            <li><img src="{{ asset('public/enduser/assets/images/payments/3.png') }}" alt=""></li>
            <li><img src="{{ asset('public/enduser/assets/images/payments/4.png') }}" alt=""></li>
            <li><img src="{{ asset('public/enduser/assets/images/payments/5.png') }}" alt=""></li>
          </ul>
        </div>
        <!-- /.payment-methods --> 
      </div>
    </div>
  </div>
</footer>

    <script type="text/javascript">
        
        var url= "{{ url('/') }}";

    </script>
    <!-- ============================================================= FOOTER : END============================================================= --> 

    <!-- For demo purposes – can be removed on production --> 

    <!-- For demo purposes – can be removed on production : End --> 

    <!-- JavaScripts placed at the end of the document so the pages load faster --> 
    <script src="{{ asset('public/enduser/assets/js/jquery-1.11.1.min.js') }}"></script> 
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script type="text/javascript">
      
      $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");
      });
    </script>

    <script src="{{ asset('public/enduser/assets/js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('public/enduser/assets/js/bootstrap-hover-dropdown.min.js') }}"></script> 
    <script src="{{ asset('public/enduser/assets/js/owl.carousel.min.js') }}"></script> 
    <script src="{{ asset('public/enduser/assets/js/echo.min.js') }}"></script> 
    <script src="{{ asset('public/enduser/assets/js/jquery.easing-1.3.min.js') }}"></script> 
    <script src="{{ asset('public/enduser/assets/js/bootstrap-slider.min.js') }}"></script> 
    <script src="{{ asset('public/enduser/assets/js/jquery.rateit.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('public/enduser/assets/js/lightbox.min.js') }}"></script> 
    <script src="{{ asset('public/enduser/assets/js/bootstrap-select.min.js') }}"></script> 
    <script src="{{ asset('public/enduser/assets/js/wow.min.js') }}"></script> 
    <script src="{{ asset('public/enduser/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootbox.js') }}"></script>
    <script src="{{ asset('public/assets/js/common.js') }}"></script> 



    
  </body>
</html>
