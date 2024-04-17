<?php

namespace App\Interfaces;

interface ConfirmationCodeMethodInterface
{
    public function send(): void;
}