<?php

namespace App;

interface Observer
{
    public function update(string $event): void;
}