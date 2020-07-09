<?php

namespace Buseet\Wunderland\Modules\Suppliers\Models;

use App\Entity\Admin;
use App\Entity\Role;
use App\ValueObjects\EmailAddress;
use Carbon\Carbon;
use Doctrine\Common\Collections\ArrayCollection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Wallet
 *
 * @package Buseet\Wunderland\Modules\Suppliers\Models
 */
class Supplier extends Model
{
    /**
     * @var string
     */
    protected $table = 'suppliers';

    /**
     * @var string[]
     */
    protected $fillable = [ 'name' ];

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
     * @param $name
     */
    public function setName($name)
    {
        if(!$name){
            throw new \DomainException('The name shouldn\'t be empty');
        }

        if( ($nameLen = strlen($name) < 3) || $nameLen > 255){
            throw new \DomainException('The name should be between 3 and 255 characters ');
        }

        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @return string
     */
    public function getCreatedAtAgo(): string
    {
        return Carbon::instance($this->getCreatedAt())->diffForHumans();
    }
}
