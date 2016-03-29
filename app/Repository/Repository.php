<?php

namespace App\Repository;

use App\Contracts\Entity\Entity;
use App\Contracts\Repository\Repository as RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;

class Repository implements RepositoryInterface
{
    /** @var  App */
    protected $app;

    /** @var Model  */
    protected $model;

    public function __construct(App $app) {
        $this->app = $app;
        $this->makeModel();
    }

    public function all($columns = array('*'))
    {
        $model = $this->model;
        return $model::all();
    }

    public function paginate($perPage = 15, $columns = array('*'))
    {
        //return $this->model-;
    }

    public function create(array $data)
    {
        $model = $this->model;
        return $model::create($data);
    }

    public function update(array $data, $id, $attribute="id") {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->model->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        return $this->model->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

    public function makeModel() {
        $this->model = $this->app->make($this->model);

        if (!$this->model instanceof Model)
            throw new \Exception("Class {$this->model} must be an instance of Illuminate\\Database\\Eloquent\\Model");
    }


}