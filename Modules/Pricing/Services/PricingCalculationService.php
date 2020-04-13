<?php


class PricingCalculationService
{
    /**
     * @param PricingCalculationDto $calculationDto
     * @return PricingCalculationResultsDto
     */
    public function calculate(PricingCalculationDto $calculationDto): PricingCalculationResultsDto {
        return new PricingCalculationResultsDto();
    }
}