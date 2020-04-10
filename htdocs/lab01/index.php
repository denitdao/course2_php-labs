<!DOCTYPE html>
<html>
<head>
    <title>Lab01</title>
</head>
<body>
<?php
class Singleton {
    private static $_instances = [];
    protected function __construct() {}
    protected function __clone () {}
    protected function __wakeup () {}
    public static function getInstance() {
        $subclass = static::class; // static means current class name
        if (!isset(self::$_instances[$subclass])) {
            self::$_instances[$subclass] = new static;
        }
        return self::$_instances[$subclass];
    }
}
class Logger extends Singleton {
    private static $_memory;
    public function log($message){
        self::$_memory[] = $message;
    }
    public function show(){
        foreach (self::$_memory as $value)
            echo $value . "<br>";
    }
}

$logger = Logger::getInstance();
$logger2 = Logger::getInstance();
if($logger === $logger2){
    $logger2->log("instances of Logger are the same");
}

$logger2->log('$a=' . $a);

$a = 101;
$b = '101';
$c = 'a';
$logger2->log('$a=' . $a);
$logger2->log('$b=\'' . $b . '\'');
$logger2->log('$$c=' . $$c);

if ($a == $b)
    $logger2->log('$a == $b');
if ($a === $b)
    $logger2->log('$a === $b');
else
    $logger2->log('$a === $b false');
if ($a == $$c)
    $logger2->log('$a == $$c');
if ($a === $$c)
    $logger2->log('$a === $$c');
else
    $logger2->log('$a === $$c false');
$logger->log('');

$logger->show();

$line = 'this is sentence';
$array = explode(' ', $line);
$array = implode($array);
echo $array . "<br>";

$person = array("name" => "Denys", "second name" => "Churchyn", "age" => 18);
foreach ($person as $key => $value)
    echo $key . ": " . $value . "<br>";

function func1($arg){
    echo "inside func1: $arg<br>";
}
func1($a);

function func2(){ // global value from superglobal
    echo "inside func2: $GLOBALS[a]<br>";
}
func2();

class Person {
    private $name, $s_name;
    function __construct($name, $s_name) {
        $this->name = $name;
        $this->s_name = $s_name;
    }
    function getInfo(){
        echo 'Name: '.$this->name.'<br>';
        echo 'Second name: '.$this->s_name.'<br>';
    }
}
class Worker extends Person {
    private $job;
    function __construct($name, $s_name, $job) {
        parent::__construct($name, $s_name);
        $this->job = $job;
    }
    public function getInfo(){
        parent::getInfo();
        echo 'Job title: '.$this->job.'<br>';
    }
}

$man = new Worker("John", "Wick", "killer");
$man->getInfo();

?>
<?= "$a<br>" ?>
</body>
</html>
