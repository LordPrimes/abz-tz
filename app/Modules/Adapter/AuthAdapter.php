<?php

namespace App\Modules\Adapter;

use App\Modules\Adapter\EmployeesQuery;
use App\Contract\AuthInterface;
use App\Model\Employees;
use Illuminate\Support\Facades\Auth;


class AuthAdapter implements AuthInterface 
{
    private $adapter;
    
    public function __construct(Employees $Employees)
    {
        $this->adapter = new EmployeesQuery($Employees);
    }
    
    public function exists(int $id)
    {
        
    }

    public function original(string $email)
    {
        return  $this->adapter->where($email);

       
    }

    public function guest()
    {
        $cheked = Auth::check();

        if($cheked == null)
        {
            return 123;
        }
    }
}

?>