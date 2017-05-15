(function(){
    angular.module('app').controller('LoginCtrl',LoginCtrl);
    LoginCtrl.$inject=['$state','authenticationsvc','$q'];

function LoginCtrl($state,authenticationsvc,$q){
    console.log(authenticationsvc);
   var self=this;
   self.user={};
   self.signin=signin;
   //console.log(self.signin)
    function signin(){
       authenticationsvc.login(self.user.username,self.user.password).then(function(result){
        if(result==false){
            //console.log(apAlertService);
            console.log('Incorrect password or username')
        }
        else{
            $state.go('root.dashboard');
        }
       });
      
   }
}
}());

app.run(['$rootScope', '$state', '$location', 'authenticationsvc',
function($rootScope,$state,$location,authenticationsvc){

   // console.log($rootScope)
    $rootScope.$on('$locationChangeStart', function (event, nextRoute) {
        console.log(nextRoute);
        console.log('starting location change',authenticationsvc.getUserInfo());
        if(!authenticationsvc.getUserInfo()){
        console.log($location.path());
        $state.go('login');
    }
    });
    $rootScope.$on('$stateChangeStart', function (event, nextRoute) {
        console.log(nextRoute);
        console.log('starting location change',authenticationsvc.getUserInfo());
        if(!authenticationsvc.getUserInfo()){
        console.log($location.path());
        $location.path('/');
    }
    });
   
}])