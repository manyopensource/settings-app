<?php

namespace App\Services;

use App\Interfaces\ConfirmationCodeMethodInterface;

class SmsConfirmationCodeService implements ConfirmationCodeMethodInterface
{
    public function send(): void
    {
        // send code via SMS
    }
}