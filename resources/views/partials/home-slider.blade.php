   <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
           
            <!-- /.item -->
          @if($banner->count())
           @foreach($banner as $key => $value) 
            <div class="item" style="background-image: url({!! asset('storage/files/banner/'.$value->field_value) !!});">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                 
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
             @endforeach  

             @else 
            <div class="item" style="background-image: url({{ asset('public/enduser/assets/images/sliders/02.jpg')}});">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                 
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>

             <div class="item" style="background-image: url({{ asset('public/enduser/assets/images/sliders/01.jpg') }});">
              <div class="container-fluid">
              
              </div>
              <!-- /.container-fluid --> 
            </div>
            
              <div class="item" style="background-image: url({{ asset('public/enduser/assets/images/sliders/03.jpg')}});">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                 
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
            @endif


            
          </div>
          <!-- /.owl-carousel --> 
        </div>
        <div class="info-boxes wow fadeInUp">
          <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">money back</h4>
                    </div>
                  </div>
                  <h6 class="text">30 Days Money Back Guarantee</h6>
                </div>
              </div>
              <!-- .col -->
              
              <div class="hidden-md col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">free shipping</h4>
                    </div>
                  </div>
                  <h6 class="text">Shipping on ordeRS over RS99</h6>
                </div>
              </div>
              <!-- .col -->
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">Special Sale</h4>
                    </div>
                  </div>
                  <h6 class="text">Extra RS5 off on all items </h6>
                </div>
              </div>
              <!-- .col --> 
            </div>
            <!-- /.row --> 
          </div>
          <!-- /.info-boxes-inner --> 
          
        </div>
   </div>
  