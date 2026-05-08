<?php

namespace App\Service;

use App\Contracts\ServerProvider;

class ServerToolsProvider implements ServerProvider {
    function createServer(string $name) {
        return "Creating a server named {$name} using ServerTools.";
    }
}