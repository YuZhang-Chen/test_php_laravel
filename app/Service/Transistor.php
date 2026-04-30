<?php

namespace App\Service;

class Transistor {
    protected $parser;
    
    public function __construct(PodcastParser $parser) {
        $this->parser = $parser;
    }


    public function broadcast(string $podcast) {
        $parsed = $this->parser->parse($podcast);
        return "broadcasting" .  $parsed;
    }
}