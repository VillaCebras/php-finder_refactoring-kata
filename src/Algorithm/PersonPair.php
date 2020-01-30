<?php

declare(strict_types = 1);

namespace CodelyTV\FinderKata\Algorithm;

final class PersonPair
{
    /** @var Person */
    protected $person1;

    /** @var Person */
    protected $person2;

    public function __construct(Person $person1 = null, Person $person2 = null)
    {
        $this->person1 = $person1;
        $this->person2 = $person2;
    }

    public function person1()
    {
        return $this->person1;
    }

    public function person2()
    {
        return $this->person2;
    }

    public function ageDifference()
    {
        return $this->person2->getBirthDateTimestamp() - $this->person1->getBirthDateTimestamp();
    }
}
