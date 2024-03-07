<?php
require_once 'animal.php';

class Ape extends Animal
{
    public function yell()
    {
        echo "Auooo" . PHP_EOL;
    }

    public function __construct($name)
    {
        parent::__construct($name);
        $this->legs = 2;
    }
}
?>
