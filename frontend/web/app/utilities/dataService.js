(function(){
    angular.module('app.data').service('dataService',DataService);
    DataService.$inject=['$http','$q'];
    function DataService($http,$q){
         
        this.saveData=saveData;
        this.getData=getData;
        //save data to the database

        function saveData(url,data){
            console.log(data);
            var deferred=$q.defer();
            $http({
            method:'POST',
            url:url,
            data:data
        }).then(function(result){
           deferred.resolve(result.data);
        },function(error){
            deferred.error(error);
        })

        return deferred.promise;
    }

// get all data from the database

    function getData(url){
        console.log(url)
        var deferred=$q.defer();
        $http({
            method:'GET',
            url:url
        }).then(function(result){
            console.log(result.data)
            deferred.resolve(result.data);
            
        },function(error){
            console.log(error)
            deferred.error(error);
        });

        return deferred.promise;
    }
    }
}())