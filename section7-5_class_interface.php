<pre>
<?php
interface WorldRule {
	function hello();
}

class MyClass implements WorldRule {

	public function hello() {
		echo "こんちは！";
	}
	
	public function thanks() {
		echo "ありがと！";
	}
}

$myClass = new MyClass();
echo $myClass->hello();
echo $myClass->thanks();


?>
</pre>