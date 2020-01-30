<?php

declare(strict_types = 1);

namespace CodelyTV\FinderKata\Algorithm;

interface FinderComparisonAlgorithm
{
    const ONE = 1;
    const TWO = 2;

    public function getBetterAnswer($currentAnswer, $candidate);
}
