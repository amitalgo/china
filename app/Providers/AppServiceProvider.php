<?php

namespace App\Providers;

use App\Entities\Page;
use App\Entities\User;
use App\Repository\Impl\PageRepositoryImpl;
use App\Repository\Impl\UserRepositoryImpl;
use App\Repository\PageRepository;
use App\Repository\UserRepository;
use App\Service\Impl\PageServiceImpl;
use App\Service\Impl\UserServiceImpl;
use App\Service\PageService;
use App\Service\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        view()->composer('admin.includes.header', function ($view){
            $view->with('profile',Auth::user());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){
        /*
         * Service Binding
         */
        $this->app->bind(UserService::class, UserServiceImpl::class);
        $this->app->bind(PageService::class, PageServiceImpl::class);
        /*
         * Repository Binding
         */
        $this->app->bind(UserRepository::class, function ($app){
            return new UserRepositoryImpl(
                $app['em'],
                $app['em']->getClassMetaData(User::class)
            );
        });
        $this->app->bind(PageRepository::class, function($app){
            return new PageRepositoryImpl(
                $app['em'],
                $app['em']->getClassMetaData(Page::class)
            );
        });
    }
}
