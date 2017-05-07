// Controller function for phone list
(function () {
    // Use strict javascript
    'use strict';
    // Create controller for phone lists for module
    angular
        .module('app')
        .controller('PhoneListController', PhoneListController);

    // Injects Phonse Service parameters to be used in controller
    PhoneListController.$inject = ['PhonesService'];
    
    // Phone list function to define the controller
    function PhoneListController(PhonesService) {
        var vm = this;
        
        vm.phone = [];
        
        activate();
        
        ///////
        
        function activate() {
            PhonesService.getPhones().then(function(response){
               vm.phones = response; 
            });
        }
        
    }

})();