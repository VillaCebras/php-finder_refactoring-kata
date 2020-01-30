<?php

declare(strict_types = 1);

namespace CodelyTV\FinderKata\Algorithm;

final class PersonPair
{
    /** @var Person */
    protected $younger;

    /** @var Person */
    protected $older;

    public function __construct(Person $person1, Person $person2)
    {
        $this->younger = $person1;
        $this->older = $person2;
        if ($person1->getBirthDate() > $person2->getBirthDate()) {
            $this->younger = $person2;
            $this->older = $person1;
        }
    }

    public function younger()
    {
        return $this->younger;
    }

    public function older()
    {
        return $this->older;
    }

    public function ageDifference()
    {
        return $this->older->getBirthDateTimestamp() - $this->younger->getBirthDateTimestamp();
    }
}
