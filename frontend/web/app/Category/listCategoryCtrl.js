(function(){
 angular.module('category').controller('CategoryListCtrl',CategoryListCtrl);

 CategoryListCtrl.$inject=['$state','authenticationsvc','dataService','getCategories'];

 function CategoryListCtrl($state,autheenticationsvc,dataService,getCategories){
    console.log(getCategories);
    var self=this;
    self.categories=getCategories;
    
 }

}());