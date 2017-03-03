<?php
// FizzBuzz問題
for ($i=1; $i<=100; $i++) {
	if (($i % 15) == 0) {
		echo "FizzBuzz<br>" . PHP_EOL;
	} else if (($i % 3) == 0) {
		echo "Fizz<br>" . PHP_EOL;
	} else if (($i % 5) == 0) {
		echo "Buzz<br>" . PHP_EOL;
	} else {
		echo $i . "<br>" . PHP_EOL;
	}
}
?>
