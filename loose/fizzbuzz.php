<?php 
// fizzbuzz in php
// print 1-100 but multiples of 3 are 'fizz' and multiples of 5 are 'buzz'

for ($fizzbuzz = 1; $fizzbuzz <= 100; ++$fizzbuzz)
{
	if ($fizzbuzz % 3 == 0 && $fizzbuzz % 5 == 0){
	echo "Fizzbuzz<br>";
	}
	elseif ($fizzbuzz % 3 == 0){
	echo "Fizz<br>";
	}
	elseif ($fizzbuzz % 5 == 0){
	echo "Buzz<br>";
	}
	else{
	echo "$fizzbuzz<br>";
	}
}

// optimized fizzbuzz


?>