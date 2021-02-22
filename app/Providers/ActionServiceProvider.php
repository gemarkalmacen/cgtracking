<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    private $actions = array(
        array(
            'class' => 'App\Services\Users\LoginUser',
            'dependencies' => ['App\Services\Users\GetUserByEmail']
        ),
        array(
            'class' => 'App\Services\Api\V1\Users\LoginUser',
            'dependencies' => ['App\Services\Api\V1\Users\GetUserByEmail']
        ),
        array(
            'class' => 'App\Services\Orders\GenerateOrderCode',
            'dependencies' => ['App\Services\Orders\IsOrderCodeExist']
        ),
        array(
            'class' => 'App\Services\Orders\CreateOrder',
            'dependencies' => ['App\Services\Orders\GenerateOrderCode']
        ),
        array(
            'class' => 'App\Services\Products\CreateProduct',
            'dependencies' => ['App\Services\Products\GenerateProductCode']
        ),
        array(
            'class' => 'App\Services\Products\GenerateProductCode',
            'dependencies' => ['App\Services\Products\IsProductCodeExist']
        ),
    );

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // bind
        foreach ($this->actions as $key => $item) {
            $this->app->bind($item['class'], function ($app) use ($item) {
                return $this->attach($app, $item);
            });
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    protected function attach($app, $item)
    {
        $dependencies = [];
        foreach ($item['dependencies'] as $dependency) {
            $dependencies[] = $app->make($dependency);
        }
        return new $item['class'](...$dependencies);
    }
}
