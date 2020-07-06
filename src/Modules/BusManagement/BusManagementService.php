<?php

namespace Buseet\Wunderland\BusManagement;

use Buseet\Wunderland\BusManagement\Aggregator\BusAggregator;
use Buseet\Wunderland\BusManagement\Transformers\BusDtoTransformer;

class BusManagementService
{
    /**
     * @var BusAggregator
     */
    private $busAggregator;

    public function __construct(BusAggregator $busAggregator)
    {
        $this->busAggregator = $busAggregator;
    }

    public function list(): array
    {
        return $this->busAggregator->list();
    }
}