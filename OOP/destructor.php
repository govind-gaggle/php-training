
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// class MyDestructableClass 
// {
//     function __construct() {
//         print "In constructor\n";
//     }

//     function __destruct() {
//         print "Destroying " . __CLASS__ . "\n";
//     }
// }

// $obj = new MyDestructableClass();


class Foo {

	static $oneName = "oneName";

	 function __construct() {
       
       $this->firstvalue = "hell1";
       $this->secondvalue = "hell2";
    }

    function __destruct() {
       $this->firstvalue = "new1";
       $this->secondvalue = "new2";

       $this->getMethod();
    }

    public  function aStaticMethod($a,$b) {
    	//die("hell");
        
         $this->getMethod();
         $this->setMethod($a,$b);

    }
    public static function statics()
    {
    	echo "hello developer";
    }

    public function getMethod()
    {    echo self::statics();
    	echo $this->firstvalue.PHP_EOL;
    	echo $this->secondvalue.PHP_EOL;
    }

    public function setMethod($a,$b)
    {
    	 $this->firstvalue=$a;
		 $this->secondvalue=$b;
		 $this->getMethod();
    }
}

// Foo::aStaticMethod();
// $classname = 'Foo';
// $classname::aStaticMethod(); // As of PHP 5.3.0
$obj= new Foo();
$obj->aStaticMethod("a","b");