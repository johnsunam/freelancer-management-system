(function(){
   angular.module('app').controller('HeaderCtrl',HeaderCtrl);
   HeaderCtrl.$inject=['$state'];
   function HeaderCtrl(){
    var self=this;
    self.logout=logout;

    function logout(){
        
    }
    
   }
}())