<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Skill' => 'App\Policies\SkillPolicy',
        'App\Models\Qualification' => 'App\Policies\QualificationPolicy',
        'App\Models\Menu' => 'App\Policies\CategoryPolicy',
        'App\Models\SubMenu' => 'App\Policies\SubCategoryPolicy',
        'App\Models\Gig' => 'App\Policies\ManageGigPolicy'
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
