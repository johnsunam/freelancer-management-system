(function(){
 angular.module('employees').controller('EmployeeListCtrl',EmployeeListCtrl);
 EmployeeListCtrl.$inject=['$state','authenticationsvc','dataService','employees','categories']

 function EmployeeListCtrl($state,authenticationsvc,dataService,employees,categories){
     var self=this;
    self.employees=employees;
    init();
    function init(){
        getCategories();
    }
    function getCategories(){
        angular.forEach(self.employees,function(element) {
            var category=_.find(categories,function(cat){
                return cat.id==element.category_id;
            });
            element.category=category.name;
            
        });
      console.log(self.category) 
    }

 }
}());