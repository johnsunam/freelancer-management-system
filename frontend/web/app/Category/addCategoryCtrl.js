(function(){
 angular.module('category').controller('CategoryCtrl',CategoryCtrl);
 CategoryCtrl.$inject=['$state','authenticationsvc','dataService'];
 function CategoryCtrl($state,authenticationsvc,dataService){
    var self=this;
    self.saveData=saveData;
    self.category={};
    var url='http://localhost/advanced/api/web/index.php/v1/categories'
    function saveData(){
        dataService.saveData(url,self.category).then(function(result){
            if(result){
                $state.go('root.categoryList');
            }
        });
    }

 }

}())