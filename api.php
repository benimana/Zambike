<?php
class fruit
{
	public $fruitname='';

	function fruitname($newFruitname=null)
	{
		if(!is_null($newFruitname)){
			$this->fruitname=$newFruitname;
		}
		return $this->fruitname;
	}
}

$ban= new fruit;
$ban->fruitname('banana');
echo "My {$ban->fruitname}  is big and juicy<br>";

$coc= new fruit;
$coc->fruitname('coconuts');
echo "Her {$coc->fruitname} are hard and pointed<br>";

?>

<?php
$first="php";
$second=&$first;
$second="rocks<br>";
print "$first is $first<br>";
print "second is $second<br>";

 ?>

 <?php
function updateCounter()
{
	static $counter;
	$counter++;
	
}
$counter=10;
updateCounter();
updateCounter();
echo "counter is $counter<br>";
echo "counter is $counter<br>";

 ?>

 <?php
function greet($name)
{
	echo "Hello $name<br>";
}
 
 greet("Jane");

for ($c = 'a'; $c <= 'z'; $c++) {
    echo $c . "\n";
}

for ($i = ord('a'); $i <= ord('z'); $i++) {
    echo chr($i) . "\n";
}

?>