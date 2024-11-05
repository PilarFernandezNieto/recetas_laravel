<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->subject('Verifica tu cuenta')
                ->line('Tu cuenta ya está casi lista, solo tienes que pinchar en el siguiente enlace')
                ->action('Confirmar Cuenta', $url)
                ->line('Si no has creado esta cuenta puedes ignorar este mensaje');
        });
    }
}
