<?php

namespace Src\Bridge\SurveyModule;

class PaymentForm extends Survey
{
    public function __construct(
        private readonly Presentation $presentation,
        private readonly int $price,
        private readonly string $title,
    ) {
        parent::__construct($this->presentation);
    }

    public function display()
    {
        // TODO: Implement display() method.
    }
}
