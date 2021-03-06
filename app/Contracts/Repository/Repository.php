<?php

/**
 * Created by PhpStorm.
 * User: albo-vieira
 * Date: 19/03/16
 * Time: 12:55
 */
namespace  App\Contracts\Repository;

interface Repository
{

    public function all($columns = array('*'));

    public function paginate($perPage = 15, $columns = array('*'));

    public function create(array $data);

    public function update(array $data, $id, $attribute="id");

    public function delete($id);

    public function find($id, $columns = array('*'));

    public function findBy($field, $value, $columns = array('*'));

}