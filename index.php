<?php

class Worker {
    private static $salariesSum = 0;
    private $name, $age, $salary;
    function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
        self::$salariesSum += $salary;
    }
    function getName() { return $this->name; }
    function getAge() { return $this->age; }
    function setAge($newAge) {
        if($newAge > 17) 
            $this->age = $newAge;
        else {
            echo "The worker cannot be below the age of 18.<br>";
        }
    }
    function getSalary() { return $this->salary; }
    function getSalariesSum() { return self::$salariesSum; }
}

$bob = new Worker("Robert", 34, 4000);
$amy = new Worker("Amelie", 28, 3200);
$amy->setAge(15);

echo "sum of workers' (" . $bob->getName() . " and " . $amy->getName() . ") 
salaries: $" . $bob->getSalariesSum();

echo "<br>";

echo "sum of workers' (" . $bob->getName() . " and " . $amy->getName() . ") 
ages: " . $bob->getAge() + $amy->getAge();


