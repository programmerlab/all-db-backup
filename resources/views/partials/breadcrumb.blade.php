 <div class="breadcrumb">
   <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="index.htm#">Home</a></li>
        @if(isset($category_name) && !isset($product->category->name))
        <li>{!! $category_name !!}</li>
        @else
        {{$product->category->name}}
        @endif
         <li class="active">{{ isset($category)?$category:''}}</li>
      </ul>
    </div>
    <!-- /.breadcrumb-inner --> 
  </div>
  <!-- /.container --> 
</div>