<?php
namespace Buseet\Wunderland\Modules\Suppliers\Repositories;

use Doctrine\DBAL\Driver\IBMDB2\DB2Connection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SupplierRepositroy
{
    private $model;

    /**
     * SupplierRepositroy constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function getALl()
    {
        return $this->model;
    }
}