(function(){
    angular.module('project').controller('projectCtrl',projectCtrl);
    projectCtrl.$inject=['$state','authenticationsvc','dataService'];

    function projectCtrl($state,authenticationsvc,dataService){
        var self=this;
        self.project={};
        self.saveData=saveData;
        var url='http://localhost/advanced/api/web/index.php/v1/projects'
        function saveData(){
            console.log(self.project);
            dataService.saveData(url,self.project).then(function(result){
                if(result){
                    $state.go('root.projectList');
                }
            })
        }


    }
}());