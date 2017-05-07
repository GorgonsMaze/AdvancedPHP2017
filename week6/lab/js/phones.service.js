/* Service file that allows us to make ajax calls usig
 * built in features. Allows getting phones based on url, and find 
 * phones based on the id
 */
(function() {
    // Use strict Javascript
    'use strict';
    // Define the service for main module
    angular
        .module('app')
        .factory('PhonesService', PhonesService);
    // Inject parameters to PhoneServiceSS
    PhonesService.$inject = ['$http', 'REQUEST'];
    
    // Defines Phones Service
    function PhonesService($http, REQUEST) {
        var url = REQUEST.Phones;
        var service = {
            'getPhones': getPhones,
            'findPhone': findPhone
        };
        return service;
        
        /////////
        // Get Phones function
        function getPhones() {
            // Promise for URL get
            return $http.get(url)
                .then(getPhonesComplete, getPhonesFailed);
            // Promise completed
            function getPhonesComplete(response) {
                return response.data;
            }
            // Promise error
            function getPhonesFailed(error) {
                return [];
            }
        }
        // Find Phone by ID Function
        function findPhone(id) {
            // Promise for get phone
            return getPhones()
                .then(function(data) {
                    // returns phone data
                    return findPhoneComplete(data);;
                });
            // Function that looks for specific phone
            function findPhoneComplete(data) {
                var results = {};
                
                angular.forEach(data, function(value, key) {
                    if ( !results.length ) {
                        if (value.hasOwnProperty('id') && value.id === id) {
                            results = angular.copy(value);
                        }
                    }
                }, results);
                
                return results;
            }
            
        }
    }
})();