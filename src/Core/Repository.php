<?php

namespace Buseet\Wunderland\Core;

use Buseet\Wunderland\Contracts\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class Repository implements RepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    public function __construct()
    {
        if (!$this->model or !class_exists($this->model)) {
            throw new \Exception('Please set the $model property to your repository path.');
        }

        $this->model = new $this->model();
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function ofId($id)
    {
        return $this->find($id);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|Model[]|mixed
     */
    public function findAll()
    {
        return $this->model->all();
    }

    /**
     * @param null $limit
     * @param null $offset
     *
     * @return mixed
     */
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
    {
        $model = new $this->model();

        $this->model->where($criteria)->take($offset)->limit($limit);

        if ($orderBy) {
            $model->orderBy($orderBy);
        }

        return $model->get();
    }

    /**
     * @return mixed
     */
    public function findOneBy(array $criteria, array $orderBy = null)
    {
        $model = new $this->model();

        $this->model->where($criteria);

        if ($orderBy) {
            $model->orderBy($orderBy);
        }

        return $model->first();
    }

    /**
     * @param Model $model
     */
    public function add(Model $model)
    {
        $model->save();
    }

    /**
     * @param $id
     */
    public function remove($id)
    {
        $this->model->destroy($id);
    }

    /**
     * @param Model $model
     *
     * @return mixed
     */
    public function size(Model $model)
    {
        return $model->count();
    }

    /**
     * @param $value
     * @param string $key
     *
     * @return mixed
     */
    public function pluck($value, $key = 'id')
    {
        return $this->model->pluck($value, $key);
    }
}
