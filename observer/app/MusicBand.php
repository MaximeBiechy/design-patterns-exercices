<?php

namespace App;

class MusicBand
{
    public $listeners = [];

    // Hors exercice mais notable:
    // Promotion du constructeur: https://www.php.net/manual/fr/language.oop5.decon.php#language.oop5.decon.constructor.promotion
    public function __construct(
        private string $name,
        private array  $concerts = []
    )
    {
    }


    public function addNewConcertDate(string $date, string $location): void
    {
        $this->concert = [
            'date' => $date,
            'location' => $location
        ];
    }

    public function attach(User $user): void
    {
        $this->listeners[] = $user;
    }

    public function detach(User $user): void
    {
        $this->listeners = array_filter($this->listeners, function ($listener) use ($user) {
            return $listener !== $user;
        });
    }
}