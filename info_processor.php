<!DOCTYPE html>
<html>
<body>

<?php
function startwithmessage(){
	if (date("H") < "20")
    {
	echo "Hello there, Thanks for paying a visit.<br>";
    } 
    else 
    {
    	echo "Have a good night";
    }
}

function datetimeinfo(){
	echo "Ill begin by printing some info about today :)<br>";
    echo "The date today is " . date("Y-m-d") . "<br>";
    echo "<br>";
}

class Human{
	public $name;
    public $age;
    
    function __construct($name, $age){
    	echo "This is info about some " . $name . "<br>";
    	$this->name = $name;
        $this->age = $age;
    }
    
    function getnameage(){
    	echo $this->name;
        echo $this.age;
    }
}

startwithmessage();
datetimeinfo();

$simon = new Human("simon", 18);
$simon->getnameage();

echo "<br>Somethings up, lemme work on it... See you<br>"
?>

</body>
</html>
