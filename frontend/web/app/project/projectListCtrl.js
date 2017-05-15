(function(){
    angular.module('project').controller('projectListCtrl',projectListCtrl);
    projectListCtrl.$inject=['$state','authenticationsvc','dataService','projects'];

    function projectListCtrl($state,authenticationsvc,dataService,projects){
        var self=this;
        self.projects=projects;

    }
}());