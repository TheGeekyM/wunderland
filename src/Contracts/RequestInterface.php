<?php

namespace Buseet\Wunderland\Contracts;

interface RequestInterface
{
    /**
     * @param array $requestBody
     * @param array $headers
     * @return $this
     */
    public function hydrate(array $requestBody, array $headers): self;

    /**
     * @return $this
     */
    public function validate(): self;

    /**
     * @return mixed
     */
    public function fulfill();
}