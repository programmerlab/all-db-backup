
<div class="col-md-6">

    <div class="form-group{{ $errors->first('category_name', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label"> Category Name <span class="error">*</span></label>
        <div class="col-lg-8 col-md-8"> 
            
                {!! $categories !!}

            <span class="label label-danger">{{ $errors->first('category_name', ':message') }}</span>
        </div>
    </div> 

    

    <div class="form-group{{ $errors->first('sub_category_name', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">Sub category name</label>
        <div class="col-lg-8 col-md-8"> 
            {!! Form::text('sub_category_name',null, ['class' => 'form-control form-cascade-control input-small'])  !!}
            <span class="label label-danger">{{ $errors->first('sub_category_name', ':message') }}</span>
            @if(Session::has('flash_alert_notice')) 
            <span class="label label-danger">

                {{ Session::get('flash_alert_notice') }} 

            </span>@endif
        </div>
    </div> 
     
    
    <div class="form-group">
        <label class="col-lg-4 col-md-4 control-label"></label>
        <div class="col-lg-8 col-md-8">

            {!! Form::submit(' Save ', ['class'=>'btn  btn-primary text-white','id'=>'saveBtn']) !!}

            <a href="{{route('category')}}">
            {!! Form::button('Back', ['class'=>'btn btn-warning text-white']) !!} </a>
        </div>
    </div>

</div> 