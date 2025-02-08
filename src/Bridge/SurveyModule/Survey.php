<?php

namespace Src\Bridge\SurveyModule;

abstract class Survey
{
    public function __construct(protected readonly Presentation $mode) {}

    abstract public function display(): void;
}
