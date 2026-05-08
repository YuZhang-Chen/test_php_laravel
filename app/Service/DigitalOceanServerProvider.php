<?php

namespace App\Service;

use App\Contracts\ServerProvider;
use App\Providers\AppServiceProvider;

class DigitalOceanServerProvider implements ServerProvider {
    function createServer(string $name) {
        return "Creating a server named {$name} on DiaitalOcean.";
    }
}