# Laravel Package for Sportily API

## Setup

### Install via composer

```
composer require sportily/sportily-laravel:1.*
```

### Publish configuration files

We've provided skeletal configuration files. Copy these into your application's ```config``` directory using:

```
artisan vendor:publish --provider=Sportily\\Laravel\\ServiceProvider
```

Once that's complete, edit the config in ```config/sportily.php```, providing your callback endpoint and your client id and secret.

### Enable sportily middleware

We've provided middleware to ensure that your client always has a valid access token. You should wrap any routes that make requests to the Sportily API like so:

```
Route::group(['middleware' => 'sportily.token'], function() {
    /* your routes here */
});
```

### Enable profile view composer

This step is optional. We've provided a view composer that populates views with the logged in user's profile information. Enable it by adding the following to your application's ```AppServiceProvider```:

```
View::composer('*', 'Sportily\Laravel\Views\ProfileComposer');
```
