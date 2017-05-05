(function(){
    angular.module('employees').controller('EmployeeCtrl',EmployeeCtrl);
    EmployeeCtrl.$inject=['$state','authenticationsvc','dataService'];

    function EmployeeCtrl($state,authenticationsvc,dataService){
        var self=this;
        self.employee={};
        self.employeeDetail=employeeDetail;
        var url='http://localhost/advanced/api/web/v1/employee/employee'
        function employeeDetail(){
           dataService.saveData(url,self.employee);
        }
    }
}())