<?php

namespace Buseet\Wunderland\Contracts;

interface UnitOfWorkInterface
{

    public function commit(): void;

    /**
     * @param callable $operation
     *
     * @return mixed
     */
    public function commitTransactional(callable $operation);
}