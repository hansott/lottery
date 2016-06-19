<?php

namespace HansOtt\Lottery;

use PHPUnit_Framework_TestCase;

final class LotteryLcgTest extends PHPUnit_Framework_TestCase
{
    public function test_ticket_is_lucky()
    {
        $lottery = new LotteryLcg();

        $probability = 50;
        $divisor = 100;
        $ticket = new Ticket($probability, $divisor);

        $lucky = 0;
        $total = 10000;
        for ($i = 0; $i < ($total - 1); $i++) {
            if ($lottery->isLucky($ticket)) {
                $lucky++;
            }
        }

        $allowedDiff = 150;
        $expected = (int) (($probability / $divisor) * $total);
        $this->assertGreaterThan($expected - $allowedDiff, $lucky);
        $this->assertLessThan($expected + $allowedDiff, $lucky);
    }
}
