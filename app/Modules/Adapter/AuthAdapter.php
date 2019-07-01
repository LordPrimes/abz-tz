<?php

namespace App\Modules\Adapter;

use App\Modules\Reposetory\RegReposetory;
use App\Contract\AuthInterface;

class AuthAdapter implements AuthInterface 
{
    private $adapter;
    
    public function __construct()
    {
        $this->adapter = new RegReposetory();
    }
    
    public function exists(int $id)
    {
        
    }

    public function original(int $id)
    {

    }

    public function guest()
    {

    }
}

?>