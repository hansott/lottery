<?php
declare(strict_types=1);

namespace HansOtt\Lottery;

final class LotteryFactoryDefault implements LotteryFactory
{
    public function getLottery() : Lottery
    {
        return new LotteryLcg();
    }
}
