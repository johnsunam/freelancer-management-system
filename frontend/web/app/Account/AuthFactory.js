angular.module('app').factory('authenticationsvc',['$http','$q','$window',
function($http,$q,$window){

    //user login api call

    function login(username,password){
        
        console.log(username,password);
        var deferred=$q.defer();
        $http({
            method:'POST',
            url:'http://localhost/advanced/api/web/index.php/v1/login/signin',
            data:{username:username,password:password}
        }).then(function(result){
            console.log(result)
            if(result.data==false)
            deferred.resolve(result.data);
            else{
                var userToken=result.data.access_token;
                $window.localStorage.userToken=userToken;
                deferred.resolve(userToken);
            }
        },function(error){
            deferred.reject(error);
        });
        return deferred.promise;
    }

    function logout(){
       $window.localStorage.userToken=undefined;
    }

 function getUserInfo(){
     console.log($window.localStorage.userToken);
     if($window.localStorage.userToken){
        return true;
     }
     else{
         return false;
     }
 }
    
    return {
        login:login,
        getUserInfo:getUserInfo,
        logout:logout
    }
}])