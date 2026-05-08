<?php
namespace App\Service\Riak;

class Connection {
    protected array $config;
    public function __construct(array $config) {
        $this->config = $config;
    }

    function connect() {
        return "Connected to Riak with config" . json_encode($this->config);
    }
}