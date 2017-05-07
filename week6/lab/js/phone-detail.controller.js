// Controller function for phone details
(function () {
    // Use strict javascript
    'use strict';
    // Assigns phone detail controller to main module
    angular
        .module('app')
        .controller('PhoneDetailController', PhoneDetailController);

    // Injects parameters to be used in controller
    PhoneDetailController.$inject = ['$routeParams', 'PhonesService'];
    
    // Function to define the controller
    function PhoneDetailController($routeParams, PhonesService) {
        var vm = this;
        
        vm.phone = {};
        var id = $routeParams.phoneId;
        
        activate();
        
        ///////
        
        function activate() {
            PhonesService.findPhone(id).then(function(response) {
                vm.phone = response;
            });
        }
        
    }

})();