<?php
namespace Sportily\Laravel;

use Config;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Sportily\Api;
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
        foreach (self::$endpoints as $name => $endpoint) {
            $this->app->bind('sportily.endpoints.' . $name, function() use($name, $endpoint) {
                $class = 'Sportily\\Laravel\\Endpoints\\' . $name;
                return new $class($endpoint);
            });
        }
    }

    /**
     * A map of all the endpoints on the sportily api.
     * @var array
     */
    private static $endpoints = [
        'AgeGroups' => 'AgeGroup',
        'Competitions' => 'Competition',
        'Divisions' => 'Division',
        'DivisionEntries' => 'DivisionEntry',
        'Documents' => 'Document',
        'Events' => 'FixtureEvent',
        'Files' => 'File',
        'Fixtures' => 'Fixture',
        'Galleries' => 'Gallery',
        'Images' => 'Image',
        'Members' => 'Member',
        'Organisations' => 'Organisation',
        'Participants' => 'Participant',
        'People' => 'Person',
        'Posts' => 'Post',
        'Roles' => 'Role',
        'Seasons' => 'Season',
        'Teams' => 'Team',
        'Users' => 'User',
        'Venues' => 'Venue'
    ];

}
