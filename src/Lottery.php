<?php
declare(strict_types=1);

namespace HansOtt\Lottery;

interface Lottery
{
    public function isLucky(Ticket $ticket) : bool;
}
