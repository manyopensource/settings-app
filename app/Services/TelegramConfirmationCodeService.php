<?php

namespace App\Services;

use App\Interfaces\ConfirmationCodeMethodInterface;

class TelegramConfirmationCodeService implements ConfirmationCodeMethodInterface
{
    public function send(): void
    {
        // send code via Telegram
    }
}