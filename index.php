<?php
phpinfo();
class Mytest{
	public $name;
	public function __construct($name){
		$this->name=$name;
		echo "My test construcy $name";
	}
	
	
}
$obj=new Mytest();
echo $obj->name;

?>