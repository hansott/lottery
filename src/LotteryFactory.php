<?php
declare(strict_types=1);

namespace HansOtt\Lottery;

interface LotteryFactory
{
    public function getLottery() : Lottery;
}
