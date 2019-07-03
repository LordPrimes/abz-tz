<?php

namespace App\Modules\Adapter;

use App\Contract\EmployeesInterface;
use Illuminate\Database\Eloquent\Model;

class EmployeesQuery implements EmployeesInterface
{
    
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;

    }
    
    
    public function all()
    {
        return $this->model->all();
    }

    public function where(string $email)
    {
        return $this->model->where('email' , $email)->get();
    }

    public function find(string $data)
    {
        return $this->model->where('email', 'LIKE', "%$data%")->get();
    }

    public function delet(string $id)
    {

    }

    public function update(string $id, array $data)
    {
        return $this->model->where('id', $id)->update($data);
    }

    public function items($id)
    {
        return $this->model->findOrFail($id);
    }
}

?>