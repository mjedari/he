<?php
require_once ('vendor/autoload.php');


use Automattic\WooCommerce\Client;

$client = new Client(
	'https://shop.local',
	'the_consumer_key',
	'the_consumer_secret',
	[
		'wp_api'  => true,
		'version' => 'wc/v2',
	]
);


$prod_data = [
	'name'          => 'A great product',
	'type'          => 'simple',
	'regular_price' => '15.00',
	'description'   => 'A very meaningful product description',
	'images'        => [
		[
			'src'      => 'https://shop.local/path/to/image.jpg',
			'position' => 0,
		],
	],
	'categories'    => [
		[
			'id' => 1,
		],
	],
];

$client->post( 'products', $prod_data );