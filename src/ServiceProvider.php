<?php
namespace Sportily\Laravel;

use Config;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Sportily\Api;
use Sportily\Laravel\Endpoints\Endpoint;
use Sportily\Laravel\Middleware\AccessToken;

class ServiceProvider extends BaseServiceProvider {

    /**
     * Pull in core sportily routes.
     */
    public function boot() {
        # setup the api client library.
		Api::setBaseUrl(Config::get('sportily.base_url'));
		Api::setApiKeys(Config::get('sportily.client_id'), Config::get('sportily.client_secret'));
		Api::setRedirectUrl(Config::get('sportily.redirect_url'));

        # define routes for working with the oauth flow.
        include __DIR__ . '/Routing/routes.php';

        # publish our config so that it can be imported into projects.
        $this->publishes([
            __DIR__ . '/Config/config.php' => config_path('sportily.php')
        ]);
    }

    /**
     * Register middleware and endpoints into the container.
     */
	public function register() {
        # register the access token middleware.
        $this->app->singleton('sportily.token', function() {
            return new AccessToken();
        });

        # register all the endpoints that the sportily api supports.
        foreach (Endpoint::$endpoints as $name => $class) {
            $this->app->bind('sportily.endpoints.' . $name, function() use($class) {
                return new Endpoint($class);
            });
        }
    }

}
