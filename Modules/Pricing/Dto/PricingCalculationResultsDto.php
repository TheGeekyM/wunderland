<?php


class PricingCalculationResultsDto
{
    /**
     * @var float
     */
    private $basePrice;

    /**
     * @var float
     */
    private $vat;

    /**
     * @var float
     */
    private $commission;

    /**
     * @return float
     */
    public function getBasePrice(): float
    {
        return $this->basePrice;
    }

    /**
     * @param float $basePrice
     */
    public function setBasePrice(float $basePrice)
    {
        $this->basePrice = $basePrice;
    }

    /**
     * @return float
     */
    public function getVat(): float
    {
        return $this->vat;
    }

    /**
     * @param float $vat
     */
    public function setVat(float $vat)
    {
        $this->vat = $vat;
    }

    /**
     * @return float
     */
    public function getCommission(): float
    {
        return $this->commission;
    }

    /**
     * @param float $commission
     */
    public function setCommission(float $commission)
    {
        $this->commission = $commission;
    }
}