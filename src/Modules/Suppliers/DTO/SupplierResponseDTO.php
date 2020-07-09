<?php

namespace Buseet\Wunderland\Modules\Suppliers\DTO;

use App\Entity\Admin;
use Buseet\Wunderland\Modules\Suppliers\Models\Supplier;
use DateTimeInterface;

class SupplierResponseDTO
{
    /**
     * @var mixed 
     */
    private $id;

    /**
     * @var mixed
     */
    private $name;

    /**
     * @var DateTimeInterface|null
     */
    private $createdAt;

    /**
     * @var DateTimeInterface|null
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $createdAtAgo;

    /**
     * SupplierResponse constructor.
     *
     * @param Supplier $supplier
     */
    public function __construct(Supplier $supplier)
    {
        $this->id = $supplier->getId();
        $this->name = $supplier->getName();
        $this->createdAt = $supplier->getCreatedAt();
        $this->createdAtAgo = $supplier->getCreatedAtAgo();
        $this->updatedAt = $supplier->getUpdatedAt();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @return string
     */
    public function getCreatedAtAgo(): string
    {
        return $this->createdAtAgo;
    }
}
