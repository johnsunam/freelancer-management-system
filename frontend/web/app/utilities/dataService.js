(function(){
    angular.module('app.data').service('dataService',DataService);
    DataService.$inject=['$http','$q'];
    function DataService($http,$q){
         var deferred=$q.defer();
        this.saveData=saveData;
        function saveData(url,data){
            $http({
            method:'POST',
            url:url,
            data:data
        }).then(function(result){
            console.log(result);
        })
        }
    }
}())