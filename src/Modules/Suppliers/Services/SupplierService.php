<?php

namespace Buseet\Wunderland\Modules\Suppliers\Services;

use Buseet\Wunderland\Suppliers\Repositories\SupplierRepositroy;

class SupplierService
{

    /**
     * @var SupplierRepositroy
     */
    private $supplierRepositroy;

    /**
     * SupplierService constructor.
     *
     * @param SupplierRepositroy $supplierRepositroy
     */
    public function __construct(SupplierRepositroy $supplierRepositroy)
    {
        $this->supplierRepositroy = $supplierRepositroy;
    }


    public function get()
    {
        return $this->supplierRepositroy->getALl();
    }
}