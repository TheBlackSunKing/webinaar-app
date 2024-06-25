<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

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
        if($this->app->environment('production')) {
            URL::forceRootUrl(Config::get('app.url'));
            if (str_contains(Config::get('app.url'), 'https://')) {
                URL::forceScheme('https');
            }

            \URL::forceScheme('https');
        }
        
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            return (new MailMessage)
                //->mailer("webinaar-app")
                ->subject('Webinaar-app Verifica el email')
                ->greeting('Bienvenido!')
                ->salutation("Me alegras")
                ->line('da click al boton de abajo para verificar tu email')
                ->action('Verificar direccion de Email', $url)
                ->line('Nos alegras que te hayas unido a nosotros para poder aprender temas de tu interes. Esperamos
                que tu estadia sea disfrutable')
                ->salutation('Atentamente la pagina');
        });
    }
}
