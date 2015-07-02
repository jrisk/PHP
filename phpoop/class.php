<!DOCTYPE html>
<html>

<head>
<title>PHP Classes</title>
<?php 

include("class_lib.php");

?>
</head>

<body>
<b>Hello</b>
<p>Friend</p>


<?php

$joe = new Person("Joe Risk");

$jim = new Person("Jim Slim");

echo "joe's full name is " . $joe->get_name();
echo "<br><br>";
echo "jim's full name is " . $jim->get_name();
// directly accessed property
echo "jim's full name is still " . $jim->name;
echo "<br><br>";

//using constructor function

$jan = new Person("Jan Vlan");

echo "constructed directly, jan's full name: " . $jan->name;

var_dump($jan);
echo "<br><br>";

echo "tell me something private pls " . $jan->set_pin(3454365456467456754);
echo "<br><br>";

echo "tell me pls directly public pls " . $jan->pin_hack();

echo "<br><br>";
//now using new Employee class inherited from Person Class and the employee constructor
//reusing set_name method and name property encapsulated in person class

$derp = new Employee("Derper McHerper");

echo "so youre telling me derp's real name is " . $derp->name . "?... lol..." . $derp->get_name();

echo "<br><br>";

$derp->set_si("4040-14-5333");

// echo "the derper's social insurance is " . $derp->get_si();

echo "<br><br>";

echo "the derper's social insurance getter function result is " . $derp->get_si();
echo "<br><br>";
echo "the derper's social insurance variable result is " . $derp->social_insurance;

echo "<br><br>";
$derp->height = "5'10";

echo "<br><br>";

echo $derp->height;
echo "<br><br>";
echo "lets make derp a pin---> " . $derp->set_pin(30303039);
echo "<br><br>";
// echo "now derps pin is ---> " . $derp->get_pin_public();
echo "<br><br>";
$stan = new Employee("Stan Pat");
echo "<br><br>";
echo "<br><br>";

var_dump($derp);



?>

</body>


</html>