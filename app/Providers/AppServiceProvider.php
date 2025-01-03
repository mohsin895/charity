<?php

namespace App\Providers;

use App\Models\GeneralSetting;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use Illuminate\Routing\Router;
use App\Http\Middleware\Member;


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
    public function boot(Router $router): void
    {

        $router->aliasMiddleware('member', Member::class);
        Passport::personalAccessTokensExpireIn(now()->addMonths(1));

        // Register factory namespace for the modular structure
        Factory::guessFactoryNamesUsing(function (string $modelName) {
            return 'Modules\\Authentication\\Database\\Factories\\'.class_basename($modelName).'Factory';
        });

        $data['setting'] = GeneralSetting::find(1);
        view()->share($data);
    }
}
