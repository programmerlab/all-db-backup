<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" style="height: auto;">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img alt="User Image" class="img-circle" src="{{ URL::asset('public/assets/dist/img/user2-160x160.jpg') }}">
      </div>
      <div class="pull-left info">
        <p>Admin</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      
      <li class="active treeview">
        <a href="{{ url('admin') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span> </i>
        </a>
          
      </li>  
  <li class="treeview {{ (isset($page_action) && $page_title=='User')?"active":'' }} ">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Manage Users</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="{{ (isset($page_action) && $page_action=='Create User')?"active":'' }}" ><a href="{{ route('user.create')}}"><i class="fa fa-user-plus"></i> Create User</a></li>
           <li class="{{ (isset($page_action) && $page_action=='View User')?"active":'' }}"><a href="{{ route('user')}}"><i class="fa  fa-list"></i> View User</a></li>
        </ul>
      </li>
 
      <li class="treeview {{ (isset($page_action) && $page_title=='Category')?"active":'' }} ">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Manage category</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="{{ (isset($page_action) && $page_action=='Create category')?"active":'' }}" ><a href="{{ route('category.create')}}"><i class="fa fa-user-plus"></i> Create Category</a></li>
           <li class="{{ (isset($page_action) && $page_action=='Create Sub-category')?"active":'' }}" ><a href="{{ route('sub-category.create')}}"><i class="fa fa-user-plus"></i> Add Sub-category</a></li>
          <li class="{{ (isset($page_action) && $page_action=='View Category')?"active":'' }}"><a href="{{ route('category')}}"><i class="fa  fa-list"></i> View Category</a></li>
        </ul>
      </li>

      <li class="treeview {{ (isset($page_action) && $page_title=='Product')?"active":'' }} ">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Manage Product</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a> 
        <ul class="treeview-menu">
          <li class="{{ (isset($page_action) && $page_action=='Create Product')?"active":'' }}" ><a href="{{ route('product.create')}}"><i class="fa fa-user-plus"></i> Create Product</a></li>
          <li class="{{ (isset($page_action) && $page_action=='View Product')?"active":'' }}"><a href="{{ route('product')}}"><i class="fa  fa-list"></i> View Product</a></li>
        </ul>
      </li>  
        
      <li class="treeview {{ (isset($page_action) && $page_title=='Transaction')?"active":'' }} ">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Manage Transactions</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a> 
        <ul class="treeview-menu">
          <li class="{{ (isset($page_action) && $page_action=='View Transaction')?"active":'' }}"><a href="{{ route('transaction')}}"><i class="fa  fa-list"></i> Transactions</a></li>
        </ul>
      </li>  


      <li class="treeview {{ (isset($page_action) && $page_title=='setting')?"active":'' }} ">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Manage Website Setting</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a> 
        <ul class="treeview-menu">
          <li class="{{ (isset($page_action) && $page_action=='View setting')?"active":'' }}"><a href="{{ route('setting')}}"><i class="fa  fa-list"></i> Website Setting</a></li>
        </ul>
      </li>  


    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
 
