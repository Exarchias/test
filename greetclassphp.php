<!DOCTYPE html>
<html>
  <head>
	  <title>Reconstructing the Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <!-- Your code here -->
        <?php
        class person {
         public $isAlive = true;
         public $firstname;
         public $lastname;
         public $age;
         public function __construct($firstname, $lastname, $age){
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->age = $age;
            }
        public function greet(){
        return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
            }
        }
        
        
        
        
        $student = new person("Robert", "Alm", "29");
        $teacher = new person("boring", "12345", "12345");
        
        
        echo $student->greet();
        ?>
       
      </p>
    </body>
</html>
