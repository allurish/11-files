<?php

class Worker {
    public $name, $age, $salary;
    function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$bob = new Worker("Robert", 34, 4000);
$amy = new Worker("Amelie", 28, 3200);
echo "sum of workers' salaries: $" . $bob->salary + $amy->salary;

