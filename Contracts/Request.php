<?php


interface RequestInterface
{
    public function hydrate(array $requestBody, array $headers): self;
    public function validate();
    public function fulfill();
}