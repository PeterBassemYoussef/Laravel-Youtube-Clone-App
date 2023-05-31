<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Policies\ChannelPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        /**
         * Laravel will automatically discover policies 
         * as long as the model and policy 
         * follow standard Laravel naming conventions. 
         */
        // 'App\Models\Channel' => 'App\Policies\ChannelPolicy',
        Channel::class => ChannelPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
