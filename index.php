<?php

class Worker {
    private $name, $age, $salary;
    function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    function getName() { return $this->name; }
    function getAge() { return $this->age; }
    function getSalary() { return $this->salary; }
}

$bob = new Worker("Robert", 34, 4000);
$amy = new Worker("Amelie", 28, 3200);
echo "sum of workers' (" . $bob->getName() . " and " . $amy->getName() . ") salaries: $" . $bob->getSalary() + $amy->getSalary();
echo "<br>";
echo "sum of workers' (" . $bob->getName() . " and " . $amy->getName() . ") ages: " . $bob->getAge() + $amy->getAge();


