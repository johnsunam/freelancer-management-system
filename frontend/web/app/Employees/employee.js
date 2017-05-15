(function(){
    angular.module('employees',['ui.router','ui.bootstrap','app.data']).
    config(Config);

    Config.$inject=['$stateProvider'];

    function Config($stateProvider){
        var resolve={
                        registeredemployees:function(dataService){
                            return dataService.getData('http://localhost/advanced/api/web/index.php/v1/registeruser')
                            .then(function(result){
                                return result;
                            })
                        },
                        employees:function(dataService){
                            return dataService.getData('http://localhost/advanced/api/web/index.php/v1/employees')
                            .then(function(result){
                                return result;
                            });
                        },
                         branches:function(dataService){
                            return dataService.getData('http://localhost/advanced/api/web/index.php/v1/branches').then(function(result){
                                return result;
                            })
                        },
                        departments:function(dataService){
                            return dataService.getData('http://localhost/advanced/api/web/index.php/v1/departments').then(function(result){
                                return result;
                            })
                        },
                        
                       subDepartments:function(dataService){
                            return dataService.getData('http://localhost/advanced/api/web/index.php/v1/subdepartments')
                            .then(function(result){
                                return result;
                            })
                        },
                        designations:function(dataService){
                            return dataService.getData('http://localhost/advanced/api/web/index.php/v1/designations')
                            .then(function(result){
                                return result;
                            })
                        },
                         grades:function(dataService){
                            return dataService.getData('http://localhost/advanced/api/web/index.php/v1/grades')
                            .then(function(result){
                                return result;
                            })
                        },
                        modes:function(dataService){
                            return dataService.getData('http://localhost/advanced/api/web/index.php/v1/modes')
                            .then(function(result){
                                return result;
                            })
                        },
                         statuses:function(dataService){
                            return dataService.getData('http://localhost/advanced/api/web/index.php/v1/status')
                            .then(function(result){
                                return result;
                            })
                        },
                        types:function(dataService){
                            return dataService.getData('http://localhost/advanced/api/web/index.php/v1/types')
                            .then(function(result){
                                return result;
                            })
                        },                 
                    }
        $stateProvider
        .state('root.employee',{
            url:'/employees',
            views:{
                'content@':{
                    templateUrl:'partials/Employees/employee.html',
                    controller:'EmployeeCtrl',
                    controllerAs:'emc',
                    resolve:resolve
                    }
                }
            
        })
        
    }
}())