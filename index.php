<?php
phpinfo();
class Mytest{
	public $name1;
	public function __construct($name){
		$this->name=$name;
		echo "My test construcy $name";
	}
	public function __construct($name){
		$this->name=$name;
		echo "My test construcy $this->name \n";
	}
	
}
$obj=new Mytest();
echo $obj->name;

?>