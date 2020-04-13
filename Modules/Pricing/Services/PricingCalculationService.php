<?php

namespace Buseet\Wunderland\Modules\Pricing\Services;

use Buseet\Wunderland\Modules\Pricing\Dto\PricingCalculationDto;
use Buseet\Wunderland\Modules\Pricing\Dto\PricingCalculationResultsDto;

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