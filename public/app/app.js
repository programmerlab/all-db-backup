  var app = angular.module('myApp', []);
        var base_url = "";
        var cart = 0;
        app.controller('shopController', function($scope,$http,$location) {
            $scope.getCart = function(){
                $http.get(base_url+'getProduct')
                    .then(function(response) {
                        $scope.product = response.data.data;
                        cart =  response.data.cart; 
                        $scope.imageUrl = $location.$$protocol+'://'+$location.host()+'/shoppingcart/public/uploads/products/';
                        if(cart){
                              $scope.cart_count = cart; 
                            $scope.checkout = 'Proceed to checkout :';   
                        }else{
                            $scope.cart_count = 0;   
                        } 
                    }); 
            } 
            $scope.addCart = function(id,cart){ 
                $scope.checkout = 'Proceed to checkout :';   
                $scope.cart_count =  ++cart; 
                this.add_to_cart = true;   
                 $http({
                    method : "GET",
                    url : base_url+"addToCart/"+id,
                }).then(function mySucces(response) {
                       console.log(response.data);
                }, function myError(response) {
                    $scope.myWelcome = response.statusText;
                });    

            } 
             $scope.removeCart = function(id)
             {
                if(count>=1)
                {
                   $scope.cart_count =  --count; 
                }
                $scope.css2 = "display:none";
                $scope.css1 = "display:block"; 
            }
    });



    // Defining angularjs application.
    var postApp = angular.module('postApp', []);
    // Controller function and passing $http service and $scope var.
    postApp.controller('postController', function($scope, $http , $log, $window)
    { 
        $scope.submitForm = function() {  
            var formData = {
                name : $scope.name,
                email: $scope.email,
                password: $scope.password,
                confirm_password: $scope.confirm_password
              } 

            $scope.errorName      = "";
            $scope.errorEmail     = "";
            $scope.errorPassword  = "";
            $scope.errorConfirmPassword = "";   
        // Posting data to php file
        $http({
          method  : 'POST',
          url     : 'register',
          data    : formData, //forms user object 
         })
          .success(function(data) { 

            if (data.status==0) {  
              $scope.errorName = data.message.name;
              $scope.errorEmail = data.message.email;
              $scope.errorPassword = data.message.password;
              $scope.errorConfirmPassword = data.message.confirm_password;
            } else {
                var url = "http://" + $window.location.host + "/shoppingcart/login";
                $log.log(url);
                $window.location.href = url;
            }
          });
        };
    }); 