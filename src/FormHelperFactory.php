<?php

namespace UEC\Standalone\Symfony\Form;

use Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper;
use Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine;
use Symfony\Component\Form\FormRenderer;
use Symfony\Component\Templating\PhpEngine;

class FormHelperFactory
{
    /**
     * @var PhpEngine
     */
    private $engine;

    public function __construct(PhpEngine $engine)
    {
        $this->engine = $engine;
    }

    public function __invoke()
    {
        $formEngine = new TemplatingRendererEngine($this->engine, [null]);
        $formRenderer = new FormRenderer($formEngine);
        return new FormHelper($formRenderer);
    }
}