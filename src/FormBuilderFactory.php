<?php

namespace UEC\Standalone\Symfony\Form;

use Symfony\Component\Form\Forms;

class FormBuilderFactory
{
    public function __invoke()
    {
        return Forms::createFormFactoryBuilder();
    }
}