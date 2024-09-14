<?php

class Employee
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
    public function getName() : string
    {
        return $this->name;
    }

    public function getSalary() : int
    {
        return $this->setSalary($this->salary);
    }

    /**
     * @throws Exception
     */
    public function setSalary($salary) : int
    {
        if ( is_numeric($salary) && $salary < 0) {
            throw new Exception("Salary must be a number & a positive integer");
        }
        return $this->salary = $salary;
    }

    public function displayResult() : void
    {
        echo "Name: " . $this->getName();
        echo "<br>";
        echo "Salary: $" . $this->getSalary();
    }
}

try {
    $employee = new Employee("John Doe", "100");
    $employee->setSalary(150);

    $employee->displayResult();


} catch (Exception $e) {
    echo "Error : ".$e->getMessage();
}
