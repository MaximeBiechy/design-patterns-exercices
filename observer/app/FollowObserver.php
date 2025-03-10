<?php

namespace App;

class FollowObserver implements Observer
{
    private $observers = [];

    public function __construct()
    {
        $this->observers = [];
    }

    public function update(string $event): void
    {
        echo "Notification: $event\n";
        foreach ($this->observers as $observer) {
            $observer->update($event);
        }
    }
}