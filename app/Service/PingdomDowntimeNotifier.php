<?php

namespace App\Service;
use App\Contracts\DowntimeNotifier;

class PingdomDowntimeNotifier implements DowntimeNotifier {
    function notify(string $message) : string {
        return "Sending downtime alert: {$message}";
    }
}