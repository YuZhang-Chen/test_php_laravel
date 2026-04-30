<?php

namespace App\Service;

class Notification {
    protected $helper;

    public function __construct(Helper $helper) {
        $this->helper = $helper;
    }

    public function send(string $message) {
        $prefix = $this->helper->getHelperMessage();
        return "[Notification] {$prefix}: {$message}";
    }
}
