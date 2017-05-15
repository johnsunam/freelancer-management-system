(function(){
   angular.module('app').controller('HeaderCtrl',HeaderCtrl);
   HeaderCtrl.$inject=['$state','authenticationsvc'];
   function HeaderCtrl($state,authenticationsvc){
    var self=this;
    self.logout=logout;

    function logout(){
        console.log('logout')
        authenticationsvc.logout();
    }
    
   }
}())