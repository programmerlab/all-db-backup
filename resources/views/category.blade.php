@extends('layouts.app')

@section('content')
<style type="text/css">
ul li {
       
    margin: 0;
    padding: 0;
    list-style-position:inside;



}


li:nth-child(odd) {
    color: #777;
    background: #fff
}
li:nth-child(even) {
    color: blue; 
}
select{

    height: 30px;
    min-width: 170px;

}

</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="form-group has-feedback">
                     <label class="from-control"> Add Categry </label> 
                        <hr>
                     <label class="from-control"> Categry Name</label> 
                    
                    <form action="category" name="category">
                       
                        <input type="text" name="sub_cat" class="from-control">
                        <input class="from-control" type="submit" name="submit_btn" value="Add Category">
                    </form>
                </div>
                <br> 
                    <div class="form-group has-feedback">
                        <label class="from-control"> Add Sub Categry </label> 
                        <hr>
                     <label class="from-control">Select Categry</label>    
                    <form action="category" name="category">
                        {!! $categories !!}
                         <label class="from-control">Sub Categry</label> 
                        <input type="text" name="sub_cat" class="from-control">
                        <input type="submit" name="submit_btn"  class="from-control"  value="Add Sub Category">
                    </form>
                </div>
                
                <div class="form-group has-feedback">
                    <br>
                     <label class="from-control"><h1>Categry List</h1></label>   
                     <hr>
                    {!! $html !!}
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
