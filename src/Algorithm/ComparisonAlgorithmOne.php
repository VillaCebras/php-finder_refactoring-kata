<?php

declare(strict_types = 1);

namespace CodelyTV\FinderKata\Algorithm;

class ComparisonAlgorithmOne implements FinderComparisonAlgorithm
{
    public function getBetterAnswer($cadidate1, $candidate2)
    {
        if ($candidate2->ageDifference() < $cadidate1->ageDifference()) {
            return $candidate2;
        }

        return $cadidate1;
    }
}
