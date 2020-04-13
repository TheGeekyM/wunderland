<?php

use PHPUnit\Framework\TestCase;

use Buseet\Wunderland\Requests\BookingIntentRequest;

final class BookingIntentRequestTest extends TestCase
{
    public function testValidate() {
        $request = new BookingIntentRequest();
        $request->validate();
    }
}