<?php namespace Jlem\Fields;

use Illuminate\Support\ServiceProvider;

class FieldsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('jlem/fields');

        \App::bind('field', function() {
            return \App::make('Jlem\Fields\FormField');
        });

        \Str::macro('spaceCase', function($string) {
            return ucwords(str_replace('_', ' ', \snake_case($string)));
        });

        \App::bind('Jlem\Fields\Arguments\LabelTranslator', \Config::get('fields::config.label_translator'));
        \App::bind('Jlem\Fields\Arguments\ArgumentMerger', \Config::get('fields::config.argument_merger'));
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
