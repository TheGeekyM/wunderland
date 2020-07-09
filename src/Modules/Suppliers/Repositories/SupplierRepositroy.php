<?php
namespace Buseet\Wunderland\Modules\Suppliers\Repositories;

use Doctrine\DBAL\Driver\IBMDB2\DB2Connection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Buseet\Wunderland\Modules\Suppliers\Models\Supplier;
use Buseet\Wunderland\Core\Repository;

/**
 * Class SupplierRepositroy
 *
 * @package Buseet\Wunderland\Modules\Suppliers\Repositories
 *
 */
class SupplierRepositroy extends Repository
{
    /**
     * @var string 
     */
    protected $model = Supplier::class;
}