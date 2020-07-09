<?php

namespace Buseet\Wunderland\Modules\Suppliers\Services;

use Buseet\Wunderland\Core\UnitOfWork;
use Buseet\Wunderland\Modules\Suppliers\DTO\SupplierRequestDTO;
use Buseet\Wunderland\Modules\Suppliers\DTO\SupplierResponse;
use Buseet\Wunderland\Modules\Suppliers\DTO\SupplierResponseDTO;
use Buseet\Wunderland\Modules\Suppliers\Exceptions\SupplierDoesNotExistException;
use Buseet\Wunderland\Modules\Suppliers\Models\Supplier;
use Buseet\Wunderland\Modules\Suppliers\Repositories\SupplierRepositroy;

/**
 * Class SupplierService.
 */
class SupplierService
{
    /**
     * @var SupplierRepositroy
     */
    private $supplierRepositroy;

    /**
     * @var UnitOfWork
     */
    private $unitOfWork;

    /**
     * SupplierService constructor.
     */
    public function __construct(SupplierRepositroy $supplierRepositroy, UnitOfWork $unitOfWork)
    {
        $this->supplierRepositroy = $supplierRepositroy;
        $this->unitOfWork = $unitOfWork;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]|\Illuminate\Support\Collection|mixed
     */
    public function getAllSuppliers()
    {
        $suppliers = $this->supplierRepositroy->findAll();

        $suppliers = $suppliers->map(function ($supplier) {
            return new SupplierResponseDTO($supplier);
        });

        return $suppliers;
    }

    /**
     * @return SupplierResponse
     */
    public function addNewSupplier(SupplierRequestDTO $Supplierrequest)
    {
        $supplier = new Supplier();
        $supplier->setName($Supplierrequest->getName());

        $this->unitOfWork->commitTransactional(function () use ($supplier) {
            $this->supplierRepositroy->add($supplier);
        });

        return new SupplierResponseDTO($supplier);
    }

    /**
     * @param $id
     *
     * @return SupplierResponse
     */
    public function getSupplierOfId($id)
    {
        $supplier = $this->supplierRepositroy->ofId($id);

        if (!$supplier) {
            throw new SupplierDoesNotExistException();
        }

        return new SupplierResponseDTO($supplier);
    }

    /**
     * @param $id
     */
    public function updateSupplierData($id, SupplierRequestDTO $supplierRequestDTO)
    {
        $supplier = $this->supplierRepositroy->ofId($id);

        if (!$supplier) {
            throw new SupplierDoesNotExistException();
        }

        $supplier->setName($supplierRequestDTO->getName());

        $this->unitOfWork->commitTransactional(function () use ($supplier) {
            $this->supplierRepositroy->add($supplier);
        });
        
        return new SupplierResponseDTO($supplier);
    }

    /**
     * @param $id
     *
     * @throws SupplierDoesNotExistException
     */
    public function deleteSupplierofId($id)
    {
        $supplier = $this->supplierRepositroy->ofId($id);

        if (!$supplier) {
            throw new SupplierDoesNotExistException();
        }

        $this->supplierRepositroy->remove($id);
    }
}
