<?php

declare(strict_types=1);

namespace App\Shared\Domain\Messaging\Command;

interface CommandBus
{
    public function dispatch(Command $command): void;
}
