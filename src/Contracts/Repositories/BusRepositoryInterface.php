<?php

namespace Buseet\Wunderland\Contracts\Repositories;

interface BusRepositoryInterface
{
    /**
     * @param int $limit
     * @return array
     */
    public function getAll(int $limit = 50): array;
}