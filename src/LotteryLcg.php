<?php

namespace HansOtt\Lottery;

final class LotteryLcg implements Lottery
{
    public function isLucky(Ticket $ticket) : bool
    {
        $chance = (int) ((float) $ticket->getDivisor() * lcg_value());

        return $chance < $ticket->getNumerator();
    }
}
