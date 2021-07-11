<?php
namespace Classes\def;
class Person 
{
    //properties
    protected $name;
    private $eyeColor;
    private $age; 

    public static $drinkingAge = 21;

    public function __construct($name, $eyeColor, $age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age= $age;
    }

    //methods
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function __destruct()
    {
        echo "Object destroyed!";
    }

    public function getName()
    {
        return $this->name;
    }

    public static function setDrinkingAge(int $newDA)
    {
        self::$drinkingAge = $newDA;
    }

    public function getDA()
    {
        return self::$drinkingAge;
    }
}