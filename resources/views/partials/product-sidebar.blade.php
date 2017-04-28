 <div class="col-md-3 sidebar"> 
    <!-- ================================== TOP NAVIGATION ================================== -->
    <div class="side-menu animate-dropdown outer-bottom-xs">
      <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
         <nav class="yamm megamenu-horizontal">
            <ul class="nav">  
              @foreach($categories as $key => $value)
                  <li class="dropdown menu-item"> <a href="{{ url('product-category/'.$value['slug'].'/'.$value['id']) }}" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>{{$value['name']}}</a>
                    <ul class="dropdown-menu mega-menu"> 
                      <li class="yamm-content">
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                              <ul class="links list-unstyled">
                                @if(count($value['child'])>0)
                                @foreach($value['child'] as $subCat)
                                  <li><a href="{{ url('product-category/'.$value['name'].'/'.$subCat['slug'].'/'.$subCat['id']) }}">{{$subCat['name']}}</a></li> 
                                @endforeach
                                @else
                                 <li>
                                 <a href="{{ url('product-category/'.$value['name'].'/'.$value['slug'].'/'.$value['id']) }}">{{$value['name']}}</a></li> 
                                @endif
                              </ul>
                            </div>  
                          </div> 
                        </li> 
                      </ul>
                    <!-- /.dropdown-menu --> 
                  </li>
                <!-- /.menu-item -->
               @endforeach 
              <!-- /.menu-item -->  
              </ul>
            <!-- /.nav --> 
          </nav>
      <!-- /.megamenu-horizontal --> 
    </div>
    <!-- /.side-menu --> 
    <!-- ================================== TOP NAVIGATION : END ================================== -->
    <div class="sidebar-module-container">
      <div class="sidebar-filter"> 
        <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
        <div style="visibility: visible; animation-name: fadeInUp;" class="sidebar-widget wow fadeInUp animated">
          <h3 class="section-title">shop by</h3>
          <div class="widget-header">
            <h4 class="widget-title">Category</h4>
          </div>
          <div class="sidebar-widget-body">
            <div class="accordion">
              
          <!-- /.accordion-group -->
                 @foreach($categories as $key => $value)
                <div class="accordion-group">
                  <div class="accordion-heading"> <a href="#collapse{{$key }}" data-toggle="collapse" class="accordion-toggle collapsed"> {{$value['name']}} </a> </div>
                  <!-- /.accordion-heading -->
                   
                    <div class="accordion-body collapse" id="collapse{{$key}}" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                         @if(count($value['child'])>0)
                          @foreach($value['child'] as $subCat)
                            <li><a href="{{ url('product-category/'.$value['name'].'/'.$subCat['slug'].'/'.$subCat['id']) }}">{{$subCat['name']}}</a></li> 
                          @endforeach
                          @else
                           <li>
                           <a href="{{ url('product-category/'.$value['name'].'/'.$value['slug'].'/'.$value['id']) }}">{{$value['name']}}</a></li> 
                          @endif
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                  
                  <!-- /.accordion-body --> 
                </div>
                 @endforeach
          <!-- /.accordion-group -->
          
        </div>
        <!-- /.accordion --> 
      </div>
      <!-- /.sidebar-widget-body --> 
    </div>
    
    <div class="home-banner"> 
    <img src="{{ asset('public/enduser/assets/images/banners/LHS-banner.jpg') }}" alt="Image"> </div>
  </div>
  <!-- /.sidebar-filter --> 
    </div>
<!-- /.sidebar-module-container --> 
</div>