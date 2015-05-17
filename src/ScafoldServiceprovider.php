<?php namespace	Bestmomo\Scafold;

use Illuminate\Support\ServiceProvider;

class ScafoldServiceProvider extends ServiceProvider{


	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot()
	{
		// Routes
		include __DIR__.'/Http/routes.php';

		// Views
	    $this->publishes([
	    	__DIR__.'/../views' => base_path('resources/views'),
	        __DIR__.'/../views/auth' => base_path('resources/views/auth'),
	    ]);

	    // Assets
		$this->publishes([
		    __DIR__.'/../public' => public_path(),
		], 'public');
	}

	public function register() {}

}