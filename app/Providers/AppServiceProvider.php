<?php

namespace App\Providers;

use App\Entities\Admin;
use App\Entities\Page;
use App\Entities\Role;
use App\Entities\User;
use App\Repository\AdminRoleRepository;
use App\Repository\Impl\AdminRoleRepositoryImpl;
use App\Repository\Impl\PageRepositoryImpl;
use App\Repository\Impl\AdminRepositoryImpl;
use App\Repository\PageRepository;
use App\Repository\AdminRepository;
use App\Service\AdminRoleService;
use App\Service\Impl\AdminRoleServiceImpl;
use App\Service\Impl\PageServiceImpl;
use App\Service\Impl\AdminServiceImpl;
use App\Service\PageService;
use App\Service\AdminService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){

        Schema::defaultStringLength(191);
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
        $this->app->bind(AdminService::class, AdminServiceImpl::class);
        $this->app->bind(PageService::class, PageServiceImpl::class);
        $this->app->bind(AdminRoleService::class,AdminRoleServiceImpl::class);
        /*
         * Repository Binding
         */
        $this->app->bind(AdminRepository::class, function ($app){
            return new AdminRepositoryImpl(
                $app['em'],
                $app['em']->getClassMetaData(Admin::class)
            );
        });
        $this->app->bind(PageRepository::class, function($app){
            return new PageRepositoryImpl(
                $app['em'],
                $app['em']->getClassMetaData(Page::class)
            );
        });

        $this->app->bind(AdminRoleRepository::class,function($app){
            return new AdminRoleRepositoryImpl(
                $app['em'],
                $app['em']->getClassMetaData(Role::class)
            );
        });
    }
}
