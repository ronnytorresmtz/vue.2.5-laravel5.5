<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MyCode\Repositories\Company\CompanyRepository;
use MyCode\Models\Company;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       
        $this->app->bind('MyCode\Repositories\Company\CompanyRepositoryInterface', function($app) 
        {
  
          return new CompanyRepository(new Company);
  
        });

        $this->app->bind('MyCode\Services\Mail\MailServiceInterface','MyCode\Services\Mail\MailService');
        
        $this->app->bind('MyCode\Services\Document\DocumentServiceInterface','MyCode\Services\Document\DocumentService');

    }
}
