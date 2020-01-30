<?php

declare(strict_types = 1);

namespace CodelyTV\FinderKata\Algorithm;

final class Finder
{
    /** @var Person[] */
    private $people;

    public function __construct(array $people)
    {
        $this->people = $people;
    }

    public function find(int $ft): FinderResult
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
            switch ($ft) {
                case FinderComparisonAlgorithm::ONE:
                    if ($candidateAnswer->ageDifference() < $answer->ageDifference()) {
                        $answer = $candidateAnswer;
                    }
                    break;

                case FinderComparisonAlgorithm::TWO:
                    if ($candidateAnswer->ageDifference() > $answer->ageDifference()) {
                        $answer = $candidateAnswer;
                    }
                    break;
            }
        }

        return FinderResult::createResult($answer);
    }
}
