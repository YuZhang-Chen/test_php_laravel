<?php

namespace App\Service;

class Service {

    protected $helper;

    public function __construct(Helper $helper) {
        $this->helper = $helper;
    }

    public function getMessage()
    {
        return 'Hello from Service Message' . $this->helper->getHelperMessage();
    }

    // public function getMessage2()
    // {
    //     return 'Service Message 2';
    // }
}
