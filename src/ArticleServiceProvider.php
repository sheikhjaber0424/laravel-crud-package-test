<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([


            __DIR__ . '/../stubs/Models/Article.php' => app_path('Models/Article.php'),
            __DIR__ . '/../stubs/migrations/create_articles_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . 'create_articles_table.php'),
            __DIR__ . '/../stubs/Controllers/ArticleController.php' => app_path('Http/Controllers/Api/ArticleController.php'),
            // __DIR__ . '/../stubs/Resources/UserResource.php' => app_path('Http/Resources/UserResource.php'),
            // __DIR__ . '/../stubs/Middleware/RestrictRequestIP.php' => app_path('Http/Middleware/RestrictRequestIP.php'),
            // __DIR__ . '/../stubs/routes/passport.php' => base_path('routes/passport.php'),
            // __DIR__ . '/../stubs/Mail/EmailVerificationMail.php' => app_path('Mail/EmailVerificationMail.php'),
            // __DIR__ . '/../stubs/views/email-verification-mail.blade.php' => resource_path('views/mails/email-verification-mail.blade.php'),
        ], 'laravel-crud-package');
    }
}
