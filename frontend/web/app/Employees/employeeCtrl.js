(function(){
    angular.module('employees').controller('EmployeeCtrl',EmployeeCtrl);
    EmployeeCtrl.$inject=['$state','authenticationsvc','dataService','registeredemployees','employees','branches','departments','subDepartments','designations','grades','modes','statuses','types'];

    function EmployeeCtrl($state,authenticationsvc,dataService,registeredemployees,employees,branches,departments,subDepartments,designations,grades,modes,statuses,types){
        var self=this;
        self.employee={};
        self.employeeDetail=employeeDetail;
       
        var url='http://localhost/advanced/api/web/index.php/v1/employee/create-employee';
        init();

        function init(){
            console.log('fsdfk')
            unregisteredUser();
        }
        function employeeDetail(){
           dataService.saveData(url,self.employee).then(function(result){
               if(result){
                   $state.go('root.dashboard');
               }
           });

        }
        function unregisteredUser(){
            var unregistered=[];
           unregistered=_.filter(registeredemployees,function(obj){
                var user=_.findWhere(employees,{reg_id:obj.id});
                console.log(user);
                return user==undefined;
           })
          self.unregistered=unregistered;
        }
    }
}())