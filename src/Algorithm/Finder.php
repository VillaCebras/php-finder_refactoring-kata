<?php

declare(strict_types = 1);

namespace CodelyTV\FinderKata\Algorithm;

final class Finder
{
    /** @var Person[] */
    private $people;

    private $comparator;

    public function __construct(array $people, FinderComparisonAlgorithm $comparator)
    {
        $this->people = $people;
        $this->comparator = $comparator;
    }

    public function find(): FinderResult
    {
        /** @var PersonPair[] $possibleResults */
        $possibleResults = [];

        for ($i = 0; $i < count($this->people); $i++) {
            for ($j = $i + 1; $j < count($this->people); $j++) {
                $candidatePair = new PersonPair($this->people[$j], $this->people[$i]);

                if ($this->people[$i]->getBirthDate() < $this->people[$j]->getBirthDate()) {
                    $candidatePair = new PersonPair($this->people[$i], $this->people[$j]);
                }

                $possibleResults[] = $candidatePair;
            }
        }

        if (count($possibleResults) < 1) {
            return FinderResult::createEmptyResult();
        }

        $answer = $possibleResults[0];

        foreach ($possibleResults as $candidateAnswer) {
            $answer = $this->comparator->getBetterAnswer($answer, $candidateAnswer);
        }

        return FinderResult::createResult($answer);
    }
}
