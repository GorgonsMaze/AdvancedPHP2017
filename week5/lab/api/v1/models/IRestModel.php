<?php

/**
 *
 * @author GFORTI
 */
interface IRestModel {
    //put your code here
    function getAll();
    function get($id); 
    function post($serverData);
    // Added put and detele function
    function put($id, $severData);
    function delete($id);
}
