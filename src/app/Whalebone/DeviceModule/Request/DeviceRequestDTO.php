<?php

declare(strict_types=1);


namespace App\Whalebone\DeviceModule\Request;

use App\Whalebone\DeviceModule\Enums\DeviceType;
use App\Whalebone\DeviceModule\Enums\OsType;

class DeviceRequestDTO
{


    public function __construct(private string $hostname, private DeviceType $deviceType, private OsType $osType, private int $owner)
    {
    }

    public function getOwner(): int
    {
        return $this->owner;
    }

    public function getOsType(): OsType
    {
        return $this->osType;
    }

    public function getHostname(): string
    {
        return $this->hostname;
    }

    public function getDeviceType(): DeviceType
    {
        return $this->deviceType;
    }


    public function setOwner(int $owner): void
    {
        $this->owner = $owner;
    }

    public function setOsType(OsType $osType): void
    {
        $this->osType = $osType;
    }

    public function setHostname(string $hostname): void
    {
        $this->hostname = $hostname;
    }

    public function setDeviceType(DeviceType $deviceType): void
    {
        $this->deviceType = $deviceType;
    }
}