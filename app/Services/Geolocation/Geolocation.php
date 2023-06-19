<?php

namespace App\Services\Geolocation;

use App\Services\Map\Map;
use App\Services\Satelite\Satelite;

class Geolocation {

    private $map;
    private $satelite;

    public function __construct(Map $map, Satelite $satelite)
    {
        $this->map = $map;
        $this->satelite = $satelite;
    }

    public function search(string $name) {
       
        $locationInfo = $this->map->findAddress($name);
        $cordinate = $this->satelite->pinpoint($locationInfo);

        return $cordinate;
    }

}