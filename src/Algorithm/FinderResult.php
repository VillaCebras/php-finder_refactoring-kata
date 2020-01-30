<?php

namespace CodelyTV\FinderKata\Algorithm;

class FinderResult
{
    protected $hasAnswer;

    protected $answer;

    protected function __construct(bool $hasAnswer, ?PersonPair $answer)
    {
        $this->hasAnswer = $hasAnswer;
        $this->answer = $answer;
    }

    public static function createResult(PersonPair $answer)
    {
        return new self(true, $answer);
    }

    public static function createEmptyResult()
    {
        return new self(false, NULL);
    }

    public function hasAnswer() : bool
    {
        return $this->hasAnswer;
    }

    public function getAnswer() : ?PersonPair
    {
        return $this->answer;
    }
}