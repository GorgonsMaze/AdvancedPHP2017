// Function used to define constants
(function() {
    // Use strict javascript
    'use strict';
    
    // Define constants for main module
    angular
        .module('app')
        .constant('REQUEST', {
            'Phones' : './data/phones.json'
        });
})();