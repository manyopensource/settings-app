<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\EmailConfirmationCodeSerive;
use App\Services\SmsConfirmationCodeSerive;
use App\Services\TelegramConfirmationCodeSerive;
use App\Services\WhatsappConfirmationCodeSerive;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind(
            PaymentGatewayInterface::class,
            function ($app) {
                return collect([
                    'email' => app(EmailConfirmationCodeService::class),
                    'sms' => app(SmsConfirmationCodeService::class),
                    'telegram' => app(TelegramConfirmationCodeService::class),
                    'whatsapp' => app(WhatsappConfirmationCodeService::class),
                ]);
            }
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
