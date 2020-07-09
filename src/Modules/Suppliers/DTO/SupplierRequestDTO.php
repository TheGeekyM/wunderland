<?php

namespace Buseet\Wunderland\Modules\Suppliers\DTO;

class SupplierRequestDTO
{

    /**
     * @var
     */
    private $name;

    /**
     * SupplierRequest constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }
}
