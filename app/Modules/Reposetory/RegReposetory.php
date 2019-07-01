<?php

namespace App\Modules\Reposetory;

use App\Contract\RegInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class RegReposetory implements RegInterface 
{
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;

       
    }

    public function reg(array $data)
    {
        return $this->model->create($data);
    }
    public function login(array $data)
    {

    }

    public function logout()
    {

    }
}

?>