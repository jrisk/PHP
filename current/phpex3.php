<?php
// PHP Chapter 4: Review

$names = fixer("dERP", "heerP", "gTERP");
echo $names[0]; 
echo $names[2]; 
echo $names[1];

function fixer($n1, $n2, $n3)
{
$n1 = ucfirst(strtolower($n1));
$n2 = ucfirst(strtolower($n2));
$n3 = ucfirst(strtolower($n3));

return array($n1, $n2, $n3);
}

echo rand(10,20);

/*
$drink = function drinknumber;
$integer = randomint
function drinknumber($integer)
{
	

switch ($drink)
{
	case "pepsi":
		echo "drink pepsi pls";
		break;
	
	case "coke":
		echo "drink coke pls";
		break;
	
	case "dr. pepper":
		echo "drink dr. pepper pls";
		break;
}
*/
// PHP Chapter 5: Arrays

$paper[] = "Copier";
$paper[] = "Printer";
$paper[] = "Wastebin";

print_r($paper);

$paper["laser"] = "Laser Printer";

print_r($paper);

$p1 = array("Meatball", "Garden", "Cold Cut", "Black Forest");

$skill = array("Guitar" => "Okay", 
				"Japanese" => "Subpar",
				"Spanish" => "Good",
				"Programming" => "Beginner",);
				
echo "skill level at Guitar is " . $skill["Guitar"] . "<br>";

echo "p1 element " . $p1[2] . "<br>";

$NFC = array(

	'North' => array("Detroit"=> "Lions",
				"Chicago"=> "Bears",
				"Green Bay"=> "Packers",
				"Minnesota"=> "Vikings"),
	'West' => array("St. Louis" => "Rams",
				"San Francisco" => "49ers",
				"Arizona" => "Cardinals",
				"Seattle" => "Seahawks")
					
);

echo "<pre>";

foreach ($NFC as $division => $team)
foreach ($team as $key => $value)
echo "$division:\t$key\t($value)<br>";

echo "</pre>";
	
foreach($NFC as $division=>$teams)
{
	echo "$division: $teams lol<br>";
}


list($a, $b) = array("Detroit", "Minnesota");
echo "<br>";

echo "a = $a, b = $b";

echo $NFC['North']['Green Bay'];
echo "hello<br>";

$chessboard = array(    
array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),    
array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),    
array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),    
array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),    
array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),    
array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),    
array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),    
array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
);

echo "<pre>";

foreach($chessboard as $row)
{
	foreach($row as $piece)
	echo "$piece ";
	echo "<br>";
}

echo "</pre>";



echo (is_array($chessboard)) ? "Yes its an array" : "Nope you good";

echo (is_array($AFC)) ? "Yes its an array" : "No its not an array";

echo count($NFC); echo "<br>";
echo count($NFC, 1); echo "<br>";
echo count($chessboard); echo "<br>";
echo count($chessboard, 1); echo "<br>";
echo $chessboard[7][2]; print_r($p1); echo "<br>";


print_r($chessboard);
rsort($chessboard, SORT_NUMERIC); echo "<br>";
print_r($chessboard);
echo $chessboard[7][2]; echo "<br>"; echo "<br>";
shuffle($p1); echo "<br>";
print_r($p1); echo "<br>";
sort ($p1, SORT_STRING); echo "<br>";
echo $p1[0];

$sentence = explode(' ', "This is a sentence with seven words");
print_r($sentence);

$aster = explode('***', 'This*****is****a***sentence*****wi*****th*****ast***erisks*');
print_r($aster); echo "<br>"; 

extract($_GET);

extract($_POST, EXTR_PREFIX_ALL, 'frompost');

$fname = "Johnson";
$fnumb = "47";
$fsal = 100000;
$ftown = "vice city";

$thisdude = compact('fname','fnumb','fsal','ftown');
print_r($thisdude);
echo $thisdude['fname'];

// print_r(compact(explode(' ','fname fnumb fsal ftown')));

$item = reset($thisdude);
echo $item; echo "<br>";
$lastitem = end($thisdude);
echo $lastitem;

/*END CHP4
 Difference between numeric and associative arrays?
		The numeric is index-based and offset with numbers starting at 0 
		while associative is an array with a key value pair
	Main benefit of array keyword?
		The array keyword makes it simpler to make an array quickly with the function array
	Difference between foreach and each?
		foreach....as is a loop which goes through each item in an array and assigns it a temporary tag with which
		you can manipulate further
			each is not a loop and only returns one element
	How can you create a multi-dimensional array?
		By putting arrays inside of arrays
	How can you determines the number of elements in an array?
		By using print_r or using count function which counts the number in the top level of the array
		in a multidimensional array use the parameter 1 after the array argument (((count(array, 1))) to get the total
What is the purpose of the explode function?
	Explode puts variables or a string into an array using a delimiter to choose how to seperate them into elements
How to set PHP's internal pointer back to the first element of an array?
	Use reset(array)
	
	
	
?>