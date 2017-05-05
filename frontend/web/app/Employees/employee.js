(function(){
    angular.module('employees',['ui.router','ui.bootstrap','app.data']).
    config(Config);
    Config.$inject=['$stateProvider'];

    function Config($stateProvider){
        $stateProvider
        .state('root.employee',{
            url:'/employees',
            views:{
                'content@':{
                    templateUrl:'partials/Employees/employee.html',
                    controller:'EmployeeCtrl',
                    controllerAs:'emc',
                    resolve:{
                        getEmployee:function(dataService){
                            var emp=dataService.getData('http://localhost/advanced/api/web/index.php/v1/employees');
                            console.log(emp)
                        }
                    }
                }
            }
        })
    }
}())