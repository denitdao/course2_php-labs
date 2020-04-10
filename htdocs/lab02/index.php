<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset='utf-8'>

    <title>Comfort City Service</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles/styles.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles/bootstrap-grid.min.css'>
    <script src='scripts/main.js'></script>
</head>

<body>
<div class="container">
    <?php

    class Singleton{
        private static $_instances = [];
        protected function __construct(){ }
        protected function __clone(){ }
        protected function __wakeup(){ }

        public static function getInstance(){
            $subclass = static::class; // static means current class name
            if (!isset(self::$_instances[$subclass])) {
                self::$_instances[$subclass] = new static;
            }
            return self::$_instances[$subclass];
        }
    }

    class User extends Singleton{
        private $log_pass = array("admin" => "none");
        private $info = array("name" => "Denys", "second_name" => "Churchyn", "birth" => 2001);
        public function check($login, $password) {
            if(!$login && !$password)
                return false;
            return $this->log_pass[$login] == $password ?? false;
        }
        public function get_info() {
            return $this->info;
        }
    }

    class GetStorage extends Singleton{
        public function __get($name) {
            return $_GET[$name] ?? false;
        }
    }

    class PostStorage extends Singleton{
        public function __get($name) {
            return $_POST[$name] ?? false;
        }
    }

    function hackCheck($string){
        $string = str_replace(' ', '-', $string); // space to '-'
        $string = preg_replace('/[^A-Za-z0-9\-@]/', '', $string); // A-Z a-z 0-9 and '-'
        return $string;
    }

    $get = GetStorage::getInstance();
    $post = PostStorage::getInstance();
    $page = hackCheck($get->page);

    if (!file_exists("pages/" . $page . ".php")) $page = 'landing';
    require "parts/header.php";
    require "pages/" . $page . ".php";
    require "parts/footer.php";
//    echo $page;
    ?>
</div>
</body>
</html>
