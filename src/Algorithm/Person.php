<?php

declare(strict_types = 1);

namespace CodelyTV\FinderKata\Algorithm;

use DateTime;

final class Person
{
    /** @var string */
    protected $name;

    /** @var DateTime */
    protected $birthDate;

    public function __construct(string $name, DateTime $birthDate)
    {
        $this->name = $name;
        $this->birthDate = $birthDate;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBirthDate(): DateTime
    {
        return $this->birthDate;
    }

    public function getBirthDateTimestamp() : int
    {
        return $this->birthDate->getTimestamp();
    }
}
