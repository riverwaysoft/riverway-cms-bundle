<?php

namespace Riverway\Cms\CoreBundle\Service\CrimeMap;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use Psr\Log\LoggerInterface;

class CrimeMapManager implements CrimeMapManagerInterface
{
    private $logger;
    private $googleGeocodeApiKey;

    /**
     * CrimeMapManager constructor.
     * @param string $google_geocode_api_key
     * @param LoggerInterface $logger
     */
    public function __construct(
        string $google_geocode_api_key,
        LoggerInterface $logger
    )
    {
        $this->logger = $logger;
        $this->googleGeocodeApiKey = $google_geocode_api_key;
    }

    /**
     * @param \stdClass $location
     * @return null|\stdClass
     */
    public function locateNeighbourhood(\stdClass $location): ?\stdClass
    {
        if (empty($location->lat) || empty($location->lng)) {
            return null;
        }
        $url = "https://data.police.uk/api/locate-neighbourhood?q={$location->lat},{$location->lng}";
        return $this->sendRequest($url);
    }

    /**
     * @param string $poly
     * @return array|null
     */
    public function streetLevelCrimes(string $poly): ?array
    {
        $url = "https://data.police.uk/api/crimes-street/all-crime";
        $args = ["poly" => $poly];
        return $this->sendRequest($url, 'POST', $args);
    }

    /**
     * @param null|\stdClass $neighbourhood
     * @return string
     */
    public function boundaryNeighbourhood(?\stdClass $neighbourhood = null): string
    {
        if (empty($neighbourhood->force) || empty($neighbourhood->neighbourhood)) {
            return null;
        }
        $url = "https://data.police.uk/api/{$neighbourhood->force}/{$neighbourhood->neighbourhood}/boundary";
        $output = $this->sendRequest($url);

        $poly = '';
        foreach ($output as $key => $point) {
            $poly .= $point->latitude . ',' . $point->longitude;
            if ($key != count($output) - 1) {
                $poly .= ':';
            }
        }
        return $poly;
    }

    /**
     * @param string $url
     * @param string $method
     * @param array|null $args
     * @return mixed|null
     */
    private function sendRequest(string $url, string $method = 'GET', ?array $args = null)
    {
        $client = new Client();

        try {
            $response = $client->request($method, $url, ['form_params' => $args]);
            $this->logger->debug('Crime map request', [
                'action' => $url,
                'method' => $method,
                'args' => $args,
                'response' => $response
            ]);
            $response = (string) $response->getBody();
            return $response ? \GuzzleHttp\json_decode($response) : null;
        } catch (RequestException $e) {
            $this->logger->warning('Crime map request', [
                'action' => $url,
                'method' => $method,
                'args' => $args,
                'response' => json_encode($e->getResponse()->getBody()->getContents())
            ]);
        }

        return null;
    }

    /**
     * @param string $cityName
     * @return null|\stdClass
     */
    public function getLocationByName(string $cityName): ?\stdClass
    {
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$cityName}+UK&key={$this->googleGeocodeApiKey}";
        $output = $this->sendRequest($url);
        if ($output->status == 'OK' && isset($output->results[0])) {
            return $output->results[0]->geometry->location;
        }
        return null;
    }
}