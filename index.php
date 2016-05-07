<?php
phpinfo();
class Mytest{
	public $name;
	public function __construct(){
		$this->name="first";
		echo "My test construcy $name";
	}
	
}
$obj=new Mytest();
echo $obj->name;

?>