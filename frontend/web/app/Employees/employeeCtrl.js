(function(){
    angular.module('employees').controller('EmployeeCtrl',EmployeeCtrl);
    EmployeeCtrl.$inject=['$state','authenticationsvc'];

    function EmployeeCtrl(){
        var self=this;
        self.employee={};
        self.employeeDetail=employeeDetail;

        function employeeDetail(){
            console.log(self.employee);
        }
    }
}())