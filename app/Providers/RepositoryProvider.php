<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\BaseRepositoryInterface',
            'App\Repositories\Contracts\BaseRepository'
        );
        $this->app->bind(
            'App\Repositories\TrainerRepositoryInterface',
            'App\Repositories\Contracts\TrainerRepository'
        );
        $this->app->bind(
            'App\Repositories\TraineeRepositoryInterface',
            'App\Repositories\Contracts\TraineeRepository'
        );
        $this->app->bind(
            'App\Repositories\CourseRepositoryInterface',
            'App\Repositories\Contracts\CourseRepository'
        );
        $this->app->bind(
            'App\Repositories\LanguageRepositoryInterface',
            'App\Repositories\Contracts\LanguageRepository'
        );
        $this->app->bind(
            'App\Repositories\PhaseRepositoryInterface',
            'App\Repositories\Contracts\PhaseRepository'
        );
        $this->app->bind(
            'App\Repositories\ResultRepositoryInterface',
            'App\Repositories\Contracts\ResultRepository'
        );
        $this->app->bind(
            'App\Repositories\ScheduleRepositoryInterface',
            'App\Repositories\Contracts\ScheduleRepository'
        );
        $this->app->bind(
            'App\Repositories\StaffTypeRepositoryInterface',
            'App\Repositories\Contracts\StaffTypeRepository'
        );
        $this->app->bind(
            'App\Repositories\UniversityRepositoryInterface',
            'App\Repositories\Contracts\UniversityRepository'
        );
        $this->app->bind(
            'App\Repositories\TestRepositoryInterface',
            'App\Repositories\Contracts\TestRepository'
        );
        $this->app->bind(
            'App\Repositories\UserRepositoryInterface',
            'App\Repositories\Contracts\UserRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
