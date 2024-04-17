<?php

namespace App\Services;

use App\Interfaces\ConfirmationCodeMethodInterface;

class WhatsappConfirmationCodeService implements ConfirmationCodeMethodInterface
{
    public function send(): void
    {
        // send code via WhatsApp
    }
}