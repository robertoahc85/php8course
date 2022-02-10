<?php

declare(strict_types=1);
class Employee {
   public function __toString() {
      return 'Employee Details';
   }
}
$emp = new Employee;
var_dump($emp instanceof Stringable);

?>
