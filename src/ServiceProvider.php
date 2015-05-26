<?php
namespace Sportily\Laravel;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider {

    /**
     * Pull in core sportily routes.
     */
    public function boot() {
        include __DIR__ . '/routes.php';
    }

    /**
     * Register middleware and endpoints into the container.
     */
	public function register() {
        # register the access token middleware.
        $this->app->singleton('sportily.token', function() {
            return new Middleware\AccessToken();
        });

        # register all the endpoints that the sportily api supports.
        foreach (self::$endpoints as $name => $class) {
            $this->app->bind('sportily.endpoints.' . $name, function() use($class) {
                return new Endpoint($class);
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
