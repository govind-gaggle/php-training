<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
}

class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "In SubClass constructor\n";
    }
}

class OtherSubClass extends BaseClass {
    // inherits BaseClass's constructor
}
class Add {
	function __construct(){
		echo "Welcome to gagglethread </br>" ;
	}
}
$add = new Add();

// In BaseClass constructor
$obj = new BaseClass();

// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass();

// In BaseClass constructor
$obj = new OtherSubClass();

class DestructableClass 
{
    function __construct() {
        print "In constructor\n";
    }

    function __destruct() {
        print "Destroying " . __CLASS__ . "\n";
    }
}

$obj = new DestructableClass();

class A
{
    function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }
   
    function __construct1($a1)
    {
        echo('__construct with 1 param called: '.$a1.PHP_EOL);
    }
   
    function __construct2($a1,$a2)
    {
        echo('__construct with 2 params called: '.$a1.','.$a2.PHP_EOL);
    }
   
    function __construct3($a1,$a2,$a3)
    {
        echo('__construct with 3 params called: '.$a1.','.$a2.','.$a3.PHP_EOL);
    }
}
$o = new A('sheep');
$o = new A('sheep','cat');
$o = new A('sheep','cat','dog'); 
