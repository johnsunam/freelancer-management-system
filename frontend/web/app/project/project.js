(function(){
    angular.module('project',['ui.router','ui.bootstrap','app.data']).
    config(Config);
    
    Config.$inject=['$stateProvider'];

    function Config($stateProvider){
        $stateProvider
        .state('root.project',{
            url:'/project',
            views:{
                'content@':{
                    templateUrl:'partials/Project/project.html',
                    controller:'projectCtrl',
                    controllerAs:'pc'
                }
            }
        })
        .state('root.projectList',{
            url:'/projectList',
            views:{
                'content@':{
                    templateUrl:'partials/Project/projectList.html',
                    controller:'projectListCtrl',
                    controllerAs:'plc',
                    resolve:{
                        projects:function(dataService){
                            return dataService.getData('http://localhost/advanced/api/web/index.php/v1/projects').then(function(result){
                                return result;
                            })
                        }
                    }
                }
            }
        })

    }
}());