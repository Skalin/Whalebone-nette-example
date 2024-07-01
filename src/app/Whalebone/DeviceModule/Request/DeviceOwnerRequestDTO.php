<?php

declare(strict_types=1);


namespace App\Whalebone\DeviceModule\Request;

use App\Whalebone\DeviceModule\Enums\DeviceType;
use App\Whalebone\DeviceModule\Enums\OsType;

class DeviceOwnerRequestDTO
{


    public function __construct(private string $name, private string $lastName)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }
}