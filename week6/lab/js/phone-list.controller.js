(function () {
    'use strict';
    angular
        .module('app')
        .controller('PhoneListController', PhoneListController);

    PhoneListController.$inject = ['PhonesService'];
    
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