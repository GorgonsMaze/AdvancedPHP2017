<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        class Dog {
            public $name;
            
            public function __construct($name) {
                $this->name = $name;
            }

            public function bark() {
                echo $this->name . ' is barking <br />';
            }
        }
        
        //$dog = new Dog('Ian');
        
        
        $dog = 'Dog';
        $dogBark = 'bark';
        
        $newDog = new $dog('Dude');
  
        
        echo $newDog->$dogBark();
        
        ?>
    </body>
</html>
