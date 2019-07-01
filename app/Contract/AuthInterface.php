<?php

namespace App\Contract;

interface AuthInterface 
{
    public function exists(int $id);

    public function original(int $id);

    public function guest();
}


?>