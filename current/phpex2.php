// Chapter 4 PHP

<?php

$y = 3 * (abs (2 * $x) + 4);

echo "a: [" . (20 > 9) . "] <br>";
echo "b: [" . (10 < 9) . "] <br>";
echo "c: [" .(1 == 0). "] <br>";
echo "d: [" .(1 == 1). "] <br>";

echo "e: [" .TRUE. "] <br>";
echo "f: [" .FALSE. "] <br>";

$myname = "Joe";
$myage = 24;

echo "a: " . 9099 . " <br>"; // number literal
echo "b:". "hello" ."  <br>"; // string literal
echo " practice " . "this" . "more <br>"; // practice . . form
echo "c: [" . true . "] <br>"; // constant literal
echo "d: " . $myname . " <br>"; // string variable
echo "e: " . $myage . " <br>"; // number variable

$day_number = 2;
$days_to_new_year = 365 - $day_number; // Expression
if ($days_to_new_year < 30)
{
	echo "Not long ways now."; //Statement
}
if ($days_to_new_year > 330)
{
	echo "The new year was like \t" . $day_number . "\t days ago";
}

$level = $score = $time = 0;

$month = "January";

if ($month == "January") echo "It's winter-time";

$a = "1000";
$n = "+1000";

if ($a == $n) echo "1";
if ($a === $n) echo "2";
"<br>";
if ($a != $n) echo "3";
if ($a !== $n) echo "4";

$a = 5; $b = 6;
echo "string <br>";
if ($a >= $b) echo "a is more than or equal to b <br>";
if ($a <= $b) echo "a is less than or equal to b<br>";
if ($a < $b) echo "a is less than b<br>";
if ($a > $b) echo "a is more than b<br>";

$money = 1000;
$bank_balance = 201;
$savings = 150;
if ($bank_balance < 100)
{
$bank_balance += $money;
}
elseif ($bank_balance > 200)
{
$savings += 100;
$money -= 100;
}
else
{
$savings += 50;
$bank_balance -= 50;
}

echo "<br>"; echo $savings;
echo "<br>"; echo $bank_balance;
echo "<br>"; echo $money;

if ($page == "News") echo "You selected the News page!";
elseif ($page == "Login") echo "You selected the login page!";
elseif ($page == "Home") echo "You selected the Home page!";
elseif ($page == "Content") echo "You selected the content page!";
elseif ($page == "Links") echo "You selected the Links page!";

$page = "Login";
switch ($page)
{
case "Home":
	echo "You selected Home";
	break;
case "Login":
	echo "You selected Login";
	break;
case "News":
	echo "You selected News";
	break;
case "About":
	echo "You selected About";
	break;
default:
	echo "Unrecognized Selection";
	break;
}
$fuel = 8.1;
$deficit = 24;
echo $fuel <= 1 ? "Low on Gas" : "All good theres enough Gas";
$enough = $fuel <=1 ? false : true;
echo $enough;
echo $deficit <= 24 ? "Onside Kick" : "Screw it";

while ($fuel > 1)
{
	echo "Current fuel is" . $fuel . "<br>";
	--$fuel;
}

$counting = 10;
while ($counting > 1)
{
echo "$counting times 2 is equal to " . $counting * 2 . "<br>";
--$counting;
}
$counted = 1;
	do
{
echo "$counted times 5 equals " . $counted * 5;
echo "<br>";
}
while (++$counted <= 5);

for ($counti = 1; $counti <= 12; ++$counti)
{
echo "$counti times 12 equals " . $counti * 12;
echo "<br>";
}

for ($i = 10, $j = 2; $i + $j <=20; ++$i, ++$j)
echo "$i and $j <br>";

$fp = fopen("text.txt", "wb");

for ($j = 0 ; $j < 100 ; ++$j)
{
$written = fwrite($fp, "data");

if ($written == FALSE) break;
}

fclose($fp);

$j = 10;

while ($j > -10)
{

$j--;
if ($j == 0) continue;
echo (10 / $j) . "<br>";

}

$x = 35;
$y = 2;

$z = (int) ($x / $y);
echo $z;
echo "chapter 5 PHP <br>";

print("what up yall this the print function we here");
print "DONT EVEN NEED PARANTHESIS HA HA";
echo strrev("hello world");
echo str_repeat("HIP", 10);
echo strtoupper("hooray");

$lowered = strtolower("AnY WAY is GoOD to LoWER the STUF HERE"); echo $lowered;

$testuc = ucfirst(strtolower("hELOO THERE"));
echo $testuc;

echo fix_names("wAlLY", "wALla", "waSHINGTON");

function fix_names($n1, $n2, $n3)
{
$n1 = ucfirst(strtolower($n1));
$n2 = ucfirst(strtolower($n2));
$n3 = ucfirst(strtolower($n3));

return "$n1..." ." ". "$n2...." . " " . "$n3";
}

$names = fix3("uganda", "fiNNA", "cArd");
echo "$names[0]...$names[1]...$names[2]";

function fix3($n1,$n2,$n3)
{
$n1 = ucfirst(strtolower($n1));
$n2 = ucfirst(strtolower($n2));
$n3 = ucfirst(strtolower($n3));

return array($n1,$n2,$n3);
}

$a1 = "william";
$a2 = "henrY";
$a3 = "hARIsoN";

echo "$a1" . " " . "$a2" . " " . "$a3";
fixin_names($a1, $a2, $a3);
echo "$a1" . " " . "$a2" . " " . "$a3";

function fixin_names(&$a1, &$a2, &$a3)
{
$a1 = ucfirst(strtolower($a1));
$a2 = ucfirst(strtolower($a2));
$a3 = ucfirst(strtolower($a3));
}

include_once "library.php";

if (function_exists("array_combine"))
{
	echo "function exists";
	}
else
{
	echo "better get it";
	}

echo phpversion();

/*$object = new User;
print_r($object);
class User
{
	public $name, $password;
	
	function save_user()
	{
	echo "Save User code goes here";
	}
}
	
echo "create and interact with an object<br>";
$object = new User;
print_r($object); echo "<br>";

$object->name = "Joe";
$object->password = "poopword";
print_r($object); echo "<br>";

$object->save_user();

class User
{
	public $name, $password;
	
	function save_user()
	{
		echo "save user code here pls";
		}
	}
	
echo "copy an object...?";
$object1 = new User;
$object1->name = "Alice";
$object2 = clone $object1;
$object2->name = "Amy";

echo "object1 name is..." . $object1->name . "<br>";
echo "object2 name is..." . $object2->name;
	
class User {
	public $name;
}

*/

class User {
function __construct($param1, $param2)
{
	// pass arguments code here
	// public $username = "Guest";
	}
	}
class User1 
{
	function __destruct() 
	{
	// destructor code here
	}
	}
class Person
{
public $name, $password;

function get_password()
{
return $this->password;
}
}
$object = new Person;

$object->password = "secret";

echo $object->get_password();
echo "create and access a static method <br>";

User3::pwd_string();

class User3
{
static function pwd_string()
{
echo "Please enter your password";
}
}

$object5 = new User5();
$object5->name = "Allison";

echo $object5->name;
class User5 {}

class Test
{
public $name = "Paul Allen"; //only literals or constants works as class property
public $age = 32;
}

Translate::lookup();

class Translate
{
	const ENGLISH = 0;
	const SPANISH = 1;
	const FRENCH = 2;
	const ITALIAN = 3;
	
static function lookup()
{
echo self::SPANISH;
}
}
// change property and method scope
class Example
{
var $name = "todd"; //Same as public but deprecated
public $age = 45; // public property
protected $income = "45,000"; // protected property can still be inherited
private function admin() // private admin stuff
{
// admin code would go here for cool admin stuff
}
}

$temp = new Tester();

echo "Test A:" . Tester::$static_property . "<br>";
echo "Test B:" . $temp->get_sp() . "<br>" ;
echo "Test C:" . $temp->static_property . "<br>";

class Tester
{
	static $static_property = "I'm static";
	
	function get_sp()
	{
	return self::$static_property;
	}
	}

// Inheriting and extending a class

$objectU = new Subscriber;
$objectU->name = "Frad";
$objectU->password = "fradsvagtables";
$objectU->phone = "7575757575";
$objectU->email = "fraddy@yahoo.com";
$objectU->display();

class Visitor
{
public $name, $password;

function save_user()
{
echo "Save User code here pls";
}
}

class Subscriber extends Visitor
{
public $phone, $email;

function display()
{
	echo "Name: " . $this->name . "<br>";
	echo "Pass: " . $this->password . "<br>";
	echo "Phone: " . $this->phone . "<br>";
	echo "Email: " . $this ->email;
	}
}

// Override a method, use the parent operator

$object0 = new Son;
$object0->test();
$object0->test2();

class Dad
{

function test()
{
echo "[Class Dad] I am your Father<br>";
}
}

class Son extends Dad
{
function test()
{
echo "[Class Son] I am Luke<br>";
}

function test2()
{
parent::test();

}
}
// use self::method() in class to make sure something is called
//now call parent class constructor

$objectX = new Tiger();

echo "Tigers have ...<br>";
echo "Fur: " . $objectX->fur . "<br>";
echo "Stripes: " . $objectX->stripes . "<br>";

class Wildcat
{
public $fur; // Wildcats have fur

function __construct()
{
$this->fur = "TRUE";
}
}

class Tiger extends Wildcat
{
public $stripes; //Tigers have stripes

function __construct()
{
parent::__construct(); // Call parent constructor first
$this->stripes = "TRUE";
}
}

//final method: Prevent a subclass from overriding a superclass
class UserF
{
final function copyright()
{
echo "This class was written by Joe R.<br>";
}
}


?>