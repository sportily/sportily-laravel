<?php

return [
	'oauth_base_url' => env('SPORTILY_OAUTH_BASE_URL', 'https://sporti.ly'),
	'base_url'       => env('SPORTILY_BASE_URL', 'https://oauth.sporti.ly'),
	'admin_url'      => env('SPORTILY_ADMIN_URL', 'https://admin.sporti.ly'),
	'redirect_url'   => env('SPORTILY_REDIRECT_URL', 'http://leagues.sporti.ly/callback'),
	'client_id'      => env('SPORTILY_CLIENT_ID', 'pk_...'),
	'client_secret'  => env('SPORTILY_CLIENT_SECRET', 'sk_...'),

];
