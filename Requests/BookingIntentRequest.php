<?php

namespace Buseet\Wunderland\Requests;

use Buseet\Wunderland\Exceptions\InvalidRequestException;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Validation;

use Buseet\Wunderland\Contracts\RequestInterface;

final class BookingIntentRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Assert\NotBlank
     */
    private $OriginStationID;

    /**
     * @var @Assert\NotBlank
     */
    private $DestinationStationID;


    private $EconomySeats;

    /**
     * @var @Assert\NotBlank
     */
    private $GoReferenceTripGroupID;

    /**
     * @var string[]
     */
    private $GoTripIDs;

    /**
     * @var string
     *
     * @Assert\NotBlank(
     *      message="The value of 'PaymentMethodID' should not be '{{ value }}'. It should not be empty"
     * )
     */
    private $PaymentMethodID;

    /**
     * @var int
     *
     * @Assert\Type(
     *      type="integer",
     *      message="The value of 'PremiumSeats' should be of type '{{ type }}'."
     * )
     */
    private $PremiumSeats;


    private $PromoCode;

    private $ReturnReferenceTripGroupID;

    private $ReturnTripIDs;


    public function hydrate(array $requestBody, array $headers = []): RequestInterface
    {
        $this->OriginStationID            = $requestBody['OriginStationID'] ?? '';
        $this->DestinationStationID       = $requestBody['DestinationStationID'] ?? '';
        $this->EconomySeats               = $requestBody['EconomySeats'] ?? '';
        $this->GoReferenceTripGroupID     = $requestBody['GoReferenceTripGroupID'] ?? '';
        $this->GoTripIDs                  = $requestBody['GoTripIDs'] ?? '';
        $this->PaymentMethodID            = $requestBody['PaymentMethodID'] ?? '';
        $this->PremiumSeats               = $requestBody['PremiumSeats'] ?? '';
        $this->PromoCode                  = $requestBody['PromoCode'] ?? '';
        $this->ReturnReferenceTripGroupID = $requestBody['ReturnReferenceTripGroupID'] ?? '';
        $this->ReturnTripIDs              = $requestBody['ReturnTripIDs'] ?? '';

        return $this;
    }

    /**
     * @return $this
     * @throws InvalidRequestException
     */
    public function validate(): RequestInterface
    {
        $validator = Validation::createValidatorBuilder()
            ->enableAnnotationMapping()
            ->getValidator();
        /** @var ConstraintViolationListInterface[] $errors */
        $errors = $validator->validate($this);
        if (!empty($errors)) {
            throw new InvalidRequestException($errors);
        }

        return $this;
    }

    public function fulfill()
    {
        // TODO: Implement fulfill() method.
    }
}