<?php

namespace App\Contract;

interface EmployeesInterface 
{

    public function all();

    public function where(string $email);
}

?>