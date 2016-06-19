<?php

namespace HansOtt\Lottery;

final class Ticket
{
    private $numerator;

    private $divisor;

    /**
     * Ticket constructor.
     *
     * @param int $numerator
     * @param int $divisor
     */
    public function __construct(int $numerator, int $divisor)
    {
        $this->assertValidNumerator($numerator);
        $this->assertValidDivisor($numerator, $divisor);
        $this->numerator = $numerator;
        $this->divisor = $divisor;
    }

    private function assertValidNumerator(int $numerator)
    {
        if ($numerator <= 0) {
            throw new InvalidArgumentException(
                sprintf(
                    'Expected a positive $numerator, but instead got: %d',
                    $numerator
                )
            );
        }
    }

    private function assertValidDivisor(int $numerator, int $divisor)
    {
        if ($divisor <= 0) {
            throw new InvalidArgumentException(
                sprintf(
                    'Expected a positive $divisor, but instead got: %d',
                    $divisor
                )
            );
        }

        if ($divisor < $numerator) {
            throw new InvalidArgumentException(
                sprintf(
                    'Expected a $divisor that is equal or greater than the $numerator, but instead got: %d < %d',
                    $divisor,
                    $numerator
                )
            );
        }
    }

    public function getNumerator() : int
    {
        return $this->numerator;
    }

    public function getDivisor() : int
    {
        return $this->divisor;
    }
}
