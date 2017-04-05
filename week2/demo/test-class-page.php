<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            include './models/TestClass.php';
            
            // Creates new instane of TestClass // testing = constructor
            $test = new TestClass('testing');
            
           
            
            echo $test->getTest();
            
            $test->setTest('true');
            
             echo $test->getTest();
             
            
            //$test->
        
        ?>
    </body>
</html>
