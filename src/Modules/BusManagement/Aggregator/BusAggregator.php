<?php

namespace Buseet\Wunderland\BusManagement\Aggregator;

use Wunderland\Contract\Repositories\BusRepositoryInterface;

final class BusAggregator
{
    /**
     * @var BusRepositoryInterface
     */
    private $busRepository;

    public function list(): array
    {
        return $this->busRepository->getAll(50);
    }
}