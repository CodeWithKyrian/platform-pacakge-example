<?php

declare(strict_types=1);

class Package
{
    public function __construct(public string $name, public string $version) {}
}
