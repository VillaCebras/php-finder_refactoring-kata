<?php

declare(strict_types = 1);

namespace CodelyTV\FinderKata\Algorithm;

interface FinderComparisonAlgorithm
{
    public function getBetterAnswer($currentAnswer, $candidate);
}
