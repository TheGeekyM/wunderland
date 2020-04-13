<?php


class BookingService
{
    /**
     * @var PricingCalculationService
     */
    private $pricingCalculationService;

    /**
     * @var PaymentService
     */
    private $paymentService;

    /**
     * BookingService constructor.
     * @param PricingCalculationService $pricingCalculationService
     * @param PaymentService $paymentService
     */
    public function __construct(PricingCalculationService $pricingCalculationService, PaymentService $paymentService)
    {
        $this->pricingCalculationService = $pricingCalculationService;
        $this->paymentService            = $paymentService;
    }

    /**
     * @param BookingDto $bookingDto
     * @return BookingResultsDto
     */
    public function book(BookingDto $bookingDto): BookingResultsDto
    {
        $pricingDto     = BookingToPricingCalculationDto::map($bookingDto);
        $pricingResults = $this->pricingCalculationService->calculate($pricingDto);

        $payDto         = new PayDto();
        $paymentResults = $this->paymentService->pay($payDto);

        return PaymentResultsToBookingResultsDto::map($paymentResults);
    }
}