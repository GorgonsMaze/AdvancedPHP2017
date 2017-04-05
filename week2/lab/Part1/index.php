<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './autoload.php';

        $test = new ErrorMessage();

        $test->addMessage("Test 1", "Testing Error Message 1");
        $test->addMessage("Test 2", "Testing Error Message 2");
        $test->addMessage("Test 3", "Testing Error Message 3");

        $test->removeMessage("Test 2");

        var_dump('<br/>', $test->getAllMessages());


        $test2 = new Message();


        $test->addMessage("Test 1", "Testing Message 1");
        $test->addMessage("Test 2", "Testing Message 2");
        $test->addMessage("Test 3", "Testing Message 3");

        $test->removeMessage("Test 3");

        var_dump('<br/>', $test->getAllMessages());
        
        ?>
    </body>
</html>
