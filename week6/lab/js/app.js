(function () {
    // Use strict Javascript
    'use strict';
    // Create module and attach configurations/options
    angular
        .module('app', ['ngRoute'])
        .config(config);

    // Inject the parameter used in config
    config.$inject = ['$routeProvider'];

    // Config function for this module
    function config($routeProvider) {
        $routeProvider.
            when('/', {
                templateUrl: 'js/phone-list.template.html',
                controller: 'PhoneListController',
                controllerAs: 'vm'
            }).
            when('/phones/:phoneId', {
                templateUrl: 'js/phone-detail.template.html',
                controller: 'PhoneDetailController',
                controllerAs: 'vm'
            }).
            otherwise({
                redirectTo: '/'
            });
    }
})();