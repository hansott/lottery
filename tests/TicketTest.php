<?php
declare(strict_types=1);

namespace HansOtt\Lottery;

final class TicketTest extends \PHPUnit_Framework_TestCase
{
    public function test_it_does_not_accept_negative_probability()
    {
        new Ticket(1, 100);
        $this->expectException(InvalidArgumentException::class);
        new Ticket(-1, 100);
    }

    public function test_it_does_not_accept_zero_probability()
    {
        $this->expectException(InvalidArgumentException::class);
        new Ticket(0, 100);
    }

    public function test_it_checks_if_the_divisor_is_greater_or_equal_than_probability()
    {
        new Ticket(100, 100);
        $this->expectException(InvalidArgumentException::class);
        new Ticket(101, 100);
    }
}
