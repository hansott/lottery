<?php

namespace HansOtt\Lottery;

use PHPUnit_Framework_TestCase;

final class LotteryFactoryDefaultTest extends PHPUnit_Framework_TestCase
{
    public function test_it_returns_a_lottery()
    {
        $factory = new LotteryFactoryDefault();
        $this->assertInstanceOf(Lottery::class, $factory->getLottery());
    }
}
