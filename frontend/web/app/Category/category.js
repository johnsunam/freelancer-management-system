(function(){
    angular.module('category',['ui.router','ui.bootstrap','app.data'])
    .config(Config);
    Config.$inject=['$stateProvider'];

    function Config($stateProvider){
        $stateProvider.
        state('root.categoryList',{
            url:'/categoryList',
            views:{
                'content@':{
                templateUrl:'partials/Category/categoryList.html',
                controller:'CategoryListCtrl',
                controllerAs:'clc',
                resolve:{
                    getCategories:function(dataService){
                        return dataService.getData('http://localhost/advanced/api/web/index.php/v1/categories').then(function(result){
                            return result;
                        });
                    }
                }
           }
         }
        })
        .state('root.category',{
            url:'/addCategory',
            views:{
                'content@':{
                templateUrl:'partials/Category/addCategory.html',
                controller:'CategoryCtrl',
                controllerAs:'acc'}
            }
        })
    }

    
}());