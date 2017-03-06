<pre>
<?php
require_once("Staff.php");

$jiro = new Staff("治郎", 33);
$jiro->hello();
var_dump($jiro);


Staff::deposit(100);
Staff::deposit(140);
var_dump(Staff::$piggyBank);

$jiro->latePenalty();
var_dump(Staff::$piggyBank);

?>
</pre>