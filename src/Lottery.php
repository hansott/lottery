<?php

namespace HansOtt\Lottery;

interface Lottery
{
    public function isLucky(Ticket $ticket) : bool;
}
