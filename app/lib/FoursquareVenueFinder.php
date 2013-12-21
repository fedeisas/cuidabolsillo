<?php

use TheTwelve\Foursquare\HttpClient\CurlHttpClient;
use TheTwelve\Foursquare\Redirector\HeaderRedirector;
use TheTwelve\Foursquare\ApiGatewayFactory;
use Illuminate\Support\Facades\Config;

class FoursquareVenueFinder
{

    private $factory;

    public function __construct()
    {
        $client_id = Config::get('foursquare.client_id');
        $client_secret = Config::get('foursquare.client_secret');

        $client = new CurlHttpClient(base_path() . '/vendor/haxx-se/curl/cacert.pem');
        $redirector = new HeaderRedirector();
        $this->factory = new ApiGatewayFactory($client, $redirector);

        // Required for most requests
        $this->factory->setClientCredentials($client_id, $client_secret);

        // Optional
        $this->factory->setEndpointUri('https://api.foursquare.com');
        $this->factory->useVersion(2);

    }

    public function search($query, $near, $latitude = null, $longitude = null)
    {

        $gateway = $this->factory->getVenuesGateway();

        $search_params = array(
            // 'query' => $query,
            'intent' => 'browse',
            'categoryId' => Config::get('foursquare.search_categoryId')
        );

        if ($latitude && $longitude) {
            $search_params['ll'] = join(',', array($latitude, $longitude));
            $search_params['radius'] = 1000;
        } else {
            if (!empty($near)) {
                $search_params['near'] = $near;
            }
        }

        $venues = $gateway->search($search_params);

        if ($venues) {
            $output = array();
            foreach ($venues as $key => $value) {
                $output[] = $this->normalizeVenue($value);
            }
            return $output;
        }

        return null;
    }

    public function single($id)
    {
        $gateway = $this->factory->getVenuesGateway();
        $venue = $gateway->getVenue($id);
        $venue = $this->normalizeVenue($venue);
        return $venue;
    }

    private function normalizeVenue($venue)
    {
        return array(
            'foursquare_id' => $venue->id,
            'name' => $venue->name,
            'location_address' => $this->parseNested($venue, 'location', 'address'),
            'location_city' => $this->parseNested($venue, 'location', 'city'),
            'location_state' => $this->parseNested($venue, 'location', 'state'),
            'location_postalCode' => $this->parseNested($venue, 'location', 'postalCode'),
            'location_country' => $this->parseNested($venue, 'location', 'country'),
            'location_lat' => $this->parseNested($venue, 'location', 'lat'),
            'location_lng' => $this->parseNested($venue, 'location', 'lng'),
            'categories' => $this->parseCategories($venue),
            'verified' => $venue->verified,
            'stats_checkinsCount' => $this->parseNested($venue, 'stats', 'checkinsCount'),
            'stats_usersCount' => $this->parseNested($venue, 'stats', 'usersCount'),
            'stats_tipCount' => $this->parseNested($venue, 'stats', 'tipCount'),
        );
    }

    private function parseNested($object, $key, $field)
    {
        if (isset($object->$key) && isset($object->$key->$field)) {
            return $object->$key->$field;
        }
        return null;
    }

    private function parseCategories($venue)
    {
        if ($venue->categories) {
            $categories = array_map(function ($category) {
                return $category->name;
            }, $venue->categories);

            return join(', ', $categories);
        }
        return null;
    }

    private function parseIcon($venue)
    {
        $category = $venue->categories[0];
        if ($category) {
            return join('', array(
                $this->parseNested($category, 'icon', 'prefix'),
                'bg_64',
                $this->parseNested($category, 'icon', 'suffix')
            ));
        }
        return null;
    }
}
