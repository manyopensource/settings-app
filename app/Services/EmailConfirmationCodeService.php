<?php

namespace App\Services;

use App\Interfaces\ConfirmationCodeMethodInterface;

class EmailConfirmationCodeService implements ConfirmationCodeMethodInterface
{
    public function send(): void
    {
        // send code via email
    }
}