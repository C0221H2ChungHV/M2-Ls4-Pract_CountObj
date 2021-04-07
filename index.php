<?php
class Application {
    private $name;
    public static $count = 0;

    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }

    public function __toString()
    {
        return "Application name ".$this->name;
    }
}
echo Application::$count;
$app1 = new Application('App One');
echo Application::$count;
$app2 = new Application('App Two');
echo Application::$count;
echo $app1 .'<br/>';
echo $app2 .'<br/>';