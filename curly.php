<?php 
class foo{
	public static $ale='ipa';
	const softdrink = 'rootbeer';
	public $bar = 'I am bar';
	// protected $name;
	public function set($name, $value){
		$this->{$name}=$value;
	}
	public function get($var){
		return $this->{$var};
	}
	public function getName(){
		// return $this->name;
	}
}

$foo = new foo();

$foo->set('goon','Mr Somchai');
echo $foo->get('goon');
echo '<br>';
echo $foo->getName();
echo '<br>';

$ipa = 'somchai';
$rootbeer ='A & W';

echo foo::$ale;
echo '<br>';
echo "{${foo::$ale}}";
echo '<br>';

echo foo::softdrink;
echo '<br>';
echo "{${foo::softdrink}}";
echo '<br>';

$bb = 'bar';
$baz = array("foo","bar","baz","quux");
echo $foo->bar;
echo '<br>';
echo "{$foo->bar}";
echo '<br>';
echo "{$foo->$bb}";
echo '<br>';
echo "{$foo->{$baz[1]}}";
echo '<br>';

?>