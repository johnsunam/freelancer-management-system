var app=angular.module('app',['ui.bootstrap','ui.router','employees','app.data']);


app.config(function($stateProvider,$urlRouterProvider,$httpProvider){
    //For unmatched url, redirect to /state1
    $urlRouterProvider.otherwise('/');
    $stateProvider
    .state('root',{
        url:'',
        abstract:true,
        views:{
            'header':{
                templateUrl:'partials/Home/header.html',
                 controller:'HeaderCtrl',
                 controllerAs:'hdc'
            },
            'leftmenu':{
                templateUrl:'partials/Home/leftmenu.html',
                // controller:'LeftCtrl',
                // controllerAs:'leftCtrl'
            },
            'footer':{
                templateUrl:'partials/Home/footer.html',
            //    controller:'FooterCtrl',
            //     controllerAs:'footerCtrl'
            }
        }
    })
    .state('login',{
        url:'/',
        views:{
            'login':{
                templateUrl:'partials/Accounts/login.html',
                controller:'LoginCtrl',
                controllerAs:'lgc'
            }
        }
    })
    .state('root.dashboard',{
        url:'/dashboard',
        views:{
            'content@':{
                templateUrl:'partials/Employees/employeeList.html',

            }
        }
    })
})