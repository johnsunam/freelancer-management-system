(function(){
    angular.module('app.data').service('apAlertService',apAlertService);

    apAlertService.$inject=['$uibModal','$sec'];

    function apAlertService($modal,$sec){
        console.log('sdfsfdsf');
        var conter=0;

        modalDefaults={
            backdrop:'static',
            keyboard:false,
            modalFade:true,
            templateUrl:'partials/Alert/alert.html'
        }
        modalOptions={
              closeButtonText: 'Close',
            actionButtonText: 'OK',
            headerText: 'Proceed?',
            showCancelButton : false,
            actionButtonClass : 'btn-success',
            bodyText: 'Perform this action?'
        }

        this.warn=function(message){
            var options = {
                headerText: 'Warning',
                bodyText: message,
                styleName : 'modalWarning'
            };
            return this.show(null, options);  
        }
        this.success=function(message){
            var options={
                headerText:'Success',
                bodyText:message,
                styleName:'modalWarning'
            }

        }
       this.show=function(customModalDefaults,customModalOptins){
              var tempModalDefaults = {},
            tempModalOptions = {};

            if(counter == 0) {
                counter++;
            } else {
                return;
            }
          
            if(customModalOptions)
                tempModalDefaults["windowClass"] = "app-modal-window "+customModalOptions.styleName;
            //Map angular-ui modal custom defaults to modal defaults defined in service
            angular.extend(tempModalDefaults, modalDefaults, customModalDefaults);

            //Map modal.html $scope custom properties to defaults defined in service
            angular.extend(tempModalOptions, modalOptions, customModalOptions);
            tempModalOptions.bodyText = $sce.trustAsHtml(tempModalOptions.bodyText);

            if (!tempModalDefaults.controller) {
                tempModalDefaults.controller = function ($scope, $uibModalInstance) {
                    $scope.modalOptions = tempModalOptions;
                    $scope.modalOptions.ok = function (result) {
                        counter--;
                        $uibModalInstance.close(result);
                    };
                    $scope.modalOptions.close = function (result) {
                        counter--;
                        $uibModalInstance.dismiss('cancel');
                    };
                }
            }
            
            return $modal.open(tempModalDefaults).result;    
        
       }
    }
}())