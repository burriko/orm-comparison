<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		\Analogue::register('App\Analogue\Company', 'App\Analogue\CompanyMap');
		\Analogue::register('App\Analogue\Employee', 'App\Analogue\EmployeeMap');
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);
		$this->app->bind('App\Analogue\Repository\CompanyRepository', function ($app) {

		    $mapper = $app->make('analogue')->mapper('App\Analogue\Company');

		    return new \App\Analogue\Repository\CompanyRepository($mapper);

		});
	}

}
