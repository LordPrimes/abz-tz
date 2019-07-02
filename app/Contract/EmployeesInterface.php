<?php

namespace App\Contract;

interface EmployeesInterface 
{

    public function all();

    public function where(string $email);

    public function find(string $data);

    public function delet(string $id);

    public function update(string $id);
}

?>