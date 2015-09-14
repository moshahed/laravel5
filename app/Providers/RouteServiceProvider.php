<?php namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * This namespace is applied to the controller routes in your routes file.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'App\Http\Controllers';

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function boot(Router $router)
	{
		parent::boot($router);

		$router->model('register_patient', 'App\RegistrationModel\PatientRegistration');

		$router->model('register_doctor', 'App\RegistrationModel\Doctors');

		$router->model('register_broker', 'App\RegistrationModel\Brokers');

		$router->model('register_investigation_group', 'App\RegistrationModel\InvestigationGroup');
		$router->model('register_investigation', 'App\RegistrationModel\Investigation');
	}

	/**
	 * Define the routes for the application.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function map(Router $router)
	{
		$router->group(['namespace' => $this->namespace], function($router)
		{
			require app_path('Http/Routes/routes.php');
		});

		$router->group(['namespace' => $this->namespace . '\Registration'], function($router)
		{
			require app_path('Http/Routes/registration.php');
		});
	}

}
