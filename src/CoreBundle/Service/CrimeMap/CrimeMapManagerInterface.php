<?php
namespace Riverway\Cms\CoreBundle\Service\CrimeMap;

interface CrimeMapManagerInterface
{
    public function locateNeighbourhood(\stdClass $location): ?\stdClass;
    public function streetLevelCrimes(string $poly): ?array;
    public function boundaryNeighbourhood(?\stdClass $neighbourhood = null): string;
    public function getLocationByName(string $cityName): ?\stdClass;
}