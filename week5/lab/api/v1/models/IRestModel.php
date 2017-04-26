<?php

interface IRestModel {
    function getAll();
    function get($id); 
    function post($serverData);
    function put($id, $serverData);
    function delete($id);
}
