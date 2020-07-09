<?php

namespace Buseet\Wunderland\Contracts\Repositories;

/**
 * Interface RepositoryInterface
 *
 * @package Wunderland\Contract\Repositories
 */
interface RepositoryInterface
{
    /**
     * @param $id
     *
     * @return mixed
     */
    public function find($id);

    /**
     * @return mixed
     */
    public function findOneBy(array $criteria, array $orderBy = null);

    /**
     * @return mixed
     */
    public function findAll();

    /**
     * @param array $criteria
     * @param array|null $orderBy
     * @param null $limit
     * @param null $offset
     *
     * @return mixed
     */
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);
}