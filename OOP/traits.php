
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class addNum{
	public $x;
	public $y;
	public $z;
	function adds($num1, $num2,$num3)
	{
		$this->x=$num1;
		$this->y = $num2;
		$this->z = $num3;
		echo "</br>";
       foreach ($this as $key => $value) {
           print "$key => $value\n";
       }
	}
}

$obj = new addNum;


$obj->adds(3,5,6);
$obj->adds(54,32,16);
$obj1 = clone $obj;
print_r($obj);


class adsf {
      public $one = 1;
    
      public function show_one() {
          echo $this->one;
      }
  }
   
   $obja = new adsf;
   $obja->show_one();

   class classname
	{
	    function __construct()
	    {
	        echo __METHOD__,"\n";
	    }
	}
$OBJ = NEW classname;