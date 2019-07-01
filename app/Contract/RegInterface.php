<?php 

namespace App\Contract;

interface RegInterface 
{
    public function reg(array $data);

    public function login(array $data);

    public function logout();
}



?>