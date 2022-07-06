<?php

namespace Piro\TelegramBot;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class TelegramServiceProvider extends ServiceProvider
{
    function boot(){
        $configPath = __DIR__.'/../config/telegram.bot.php';

        $this->publishes([$configPath => config_path('telegram.bot.php')], 'config');
        $this->mergeConfigFrom($configPath, 'telegram.bot');
        $this->commands([Console\Commands\StartBot::class,]);

        foreach ($this->app->config['telegram.bot.listeners'] as $event=>$listener){
            Event::listen($event, $listener);
        }
    }
}
