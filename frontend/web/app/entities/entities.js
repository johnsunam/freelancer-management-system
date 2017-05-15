(function(){
    angular.module('entities',['ui.router','ui.bootstrap','app.data']).config(Config);
    Config.$inject=['$stateProvider'];
    
    function Config($stateProvider){
        var resolve={
            
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
        .state('root.entities',{
            url:'/entities',
            views:{
                'content@':{
                    templateUrl:'partials/Entities/entities.html'
                }
            }
        })
        .state('root.department',{
            url:'/department',
            views:{
                'content@':{
                    templateUrl:'partials/Entities/department.html',
                    controller:'EntitiesCtrl',
                    controllerAs:'ec',
                    resolve:resolve
                }
            }
        })
        .state('root.branch',{
            url:'/branch',
            views:{
                'content@':{
                    templateUrl:'partials/Entities/branch.html',
                    controller:'EntitiesCtrl',
                    controllerAs:'ec',
                    resolve:resolve
                    
                }
            }
        })
        .state('root.subDepartment',{
            url:'/subDepartment',
            views:{
                'content@':{
                    templateUrl:'partials/Entities/subDepartment.html',
                    controller:'EntitiesCtrl',
                    controllerAs:'ec',
                    resolve:resolve
                }
            }
        })
        .state('root.designation',{
            url:'/designation',
            views:{
                'content@':{
                    templateUrl:'partials/Entities/designation.html',
                    controller:'EntitiesCtrl',
                    controllerAs:'ec',
                    resolve:resolve
                }
            }
        })
        .state('root.grade',{
            url:'/grade',
            views:{
                'content@':{
                    templateUrl:'partials/Entities/grade.html',
                    controller:'EntitiesCtrl',
                    controllerAs:'ec',
                    resolve:resolve
                }
            }
        })
        .state('root.mode',{
            url:'/branch',
            views:{
                'content@':{
                    templateUrl:'partials/Entities/mode.html',
                    controller:'EntitiesCtrl',
                    controllerAs:'ec',
                    resolve:resolve
                }
            }
        })
        .state('root.status',{
            url:'/branch',
            views:{
                'content@':{
                    templateUrl:'partials/Entities/status.html',
                    controller:'EntitiesCtrl',
                    controllerAs:'ec',
                    resolve:resolve
                }
            }
        })
    }


}());