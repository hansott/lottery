<?php

namespace HansOtt\Lottery;

interface LotteryFactory
{
    public function getLottery() : Lottery;
}
