(function(){
    angular.module('entities').controller('EntitiesCtrl',EntitiesCtrl);
    EntitiesCtrl.$inject=['$state','authenticationsvc','dataService','branches','departments','subDepartments','designations','grades','modes','statuses','types']

    function EntitiesCtrl($state,authenticationsvc,dataService,branches,departments,subDepartments,designations,grades,modes,status,types){
        var self=this;
        self.saveData=saveData;
        self.departments=departments;
        self.branches=branches;
        self.data={};
        console.log(self.departments)
        function saveData(url){
            console.log(url);
            dataService.saveData(url,self.data).then(function(result){
                console.log(result);
            });
        }
    }

}());