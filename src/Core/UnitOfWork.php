<?php

namespace Buseet\Wunderland\Core;

use Buseet\Wunderland\Contracts\UnitOfWorkInterface;
use Illuminate\Support\Facades\DB;

final class UnitOfWork implements UnitOfWorkInterface
{
    public function commit(): void
    {
        return ;
        $this->entityManager->flush();
    }

    /**
     * @param callable $operation
     *
     * @return mixed
     */
    public function commitTransactional(callable $operation)
    {
        return DB::transaction($operation);
    }
}