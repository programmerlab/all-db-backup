

//=============Checkout====================

function changeStatus(id,method)
{
    var status =  $('#'+id).attr('data'); 
    $.ajax({
        type: "GET",
        data: {id: id,status:status},
        url: url+'/'+method,
        beforeSend: function() {
           $('#'+id).html('Processing');
        },
        success: function(response) {
            
      //bootbox.alert('Activated');            
        if(response==1)
            {
                $('#'+id).html('Active'); 
                $('#'+id).attr('data',response);
                $('#'+id).removeClass('label label-warning status').addClass('label label-success status');
                
                 console.log(response);
                 $('#btn'+id).removeAttr('disabled');
            }else
            {
                $('#'+id).html('Inactive'); 
                $('#'+id).attr('data',response);
                $('#'+id).removeClass('label label-success status').addClass('label label-warning status');
                $('#btn'+id).attr('disabled','disabled');
            }
        }
    });
}

 function billing()
{ 
    

    var formdata =  $('form#billing').serialize(); 
    $.ajax({
        type: "POST", 
        url: url+'/billing',
        data : formdata,

        beforeSend: function() {
           //$('#'+id).html('Processing');
        },
         dataType: "json",
        success: function(response) {
            bootbox.alert(response);
            if(response.code==200)
            { 
                var msg = response.msg;
               // bootbox.alert(msg); 
                    $('#collapse_three').trigger("click");
            }else
            {   
            }
        }
    });
}


function loginBtn()
{

 $('#register').remove(); 
 $('#collapseTwo').addClass('in');
 $('#collapsed_biling').removeClass("collapsed");   

 
   var formdata =  $('form#loginForm').serialize();

    $.ajax({
        type: "POST", 
        url: url+'/Ajaxlogin',
        data : formdata,

        beforeSend: function() {
           //$('#'+id).html('Processing');
        },
         dataType: "json",
        success: function(response) {
            
            if(response.code==200)
            { 
                var msg = response.msg;
               // bootbox.alert(msg); 
                $('#register').remove();
            }else
            {   var msg = response.msg;
                $('#loginError').html(msg);
            }
        }
    });
}

function signUp()
{
    var formdata =  $('form#register').serialize();
    $('#regErr').html('');
    $.ajax({
        type: "POST", 
        url: url+'/signup',
        data : formdata,

        beforeSend: function() {
           //$('#'+id).html('Processing');
        },
         dataType: "json",
        success: function(response) {
            


             if(response.status==0)
             {
                var html='<br>';
                if(response.message.first_name)
                {
                    html += response.message.first_name+'<br>';
                }
                if(response.message.email)
                {
                    html += response.message.email+'<br>';
                }
                if(response.message.confirm_password)
                {
                    html +=  response.message.confirm_password+'<br>';
                }
                if(response.message.password)
                {
                    html += response.message.password+'<br>';
                }
                 
                 $('#regErr').html(html);
                
             }
            if(response.status==1)
             {
                   location.reload();
             }

            console.log(response.message.confirm_password);
        }
    });


}