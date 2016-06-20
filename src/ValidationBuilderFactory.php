<?php

namespace UEC\Standalone\Symfony\Form;

use Symfony\Component\Validator\Validation;

class ValidationBuilderFactory
{
    public function __invoke()
    {
        return Validation::createValidatorBuilder();
    }
}