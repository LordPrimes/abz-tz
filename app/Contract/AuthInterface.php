<?php

namespace App\Contract;

interface AuthInterface 
{
    public function exists(int $id);

    public function original(string $id);

    public function guest();
}


?>