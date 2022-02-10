<?php

class Employee{
    public function __toString(): string
    {
       return 'Employee Name';
    }
 }
 $employee = new Employee();
 print_r((string)$employee);
?>

