(function(){
    angular.module('category',['ui.router','ui.bootstrap','app.data'])
    .config(Config);
    Config.$inject=['$stateProvider'];

    function Config($stateProvider){
        $stateProvider.
        state('root.categoryList',{
            url:'/categoryList',
            views:{
                templateUrl:'partials/Category/categoryList.html',
                controller:'CategoryListCtrl',
                controllerAs:'clc'
            }
        })
        .state('root.category',{
            url:'/addCategory',
            views:{
                templateUrl:'partials/Category/addCategory.html',
                controller:'CategoryCtrl',
                controllerAs:'acc'
            }
        })
    }

    
}());