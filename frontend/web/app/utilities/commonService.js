(function(){
    angular.module('app.data').service('commonService',commonService);
    commonService.$inject=['$http', '$q', '$filter', '$stateParams', 'dataService','$anchorScroll','$location'];

    function commonService($http, $q, $filter, $stateParams, dataService,$anchorScroll,$location){
        this.dublicateData=dublicateData;
        var deferred=$q.defer();
        function dublicateData(url,name){
                $http({
                    method:"GET",
                    url:url +'/'+name,
                }).then(function(result){
                    console.log(result)
                    deferred.resolve(result.data)
                },function(error){
                    deferred.error(error)
                })
        }
    }
}())