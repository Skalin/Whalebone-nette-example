<?php

declare(strict_types=1);


namespace App\Whalebone\DeviceModule\Models;

use App\Whalebone\DeviceModule\Enums\DeviceType;
use App\Whalebone\DeviceModule\Enums\OsType;
use App\Whalebone\DeviceModule\Repositories\DeviceRepository;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity(repositoryClass: DeviceRepository::class)]
class Device implements \JsonSerializable
{

    #[Id]
    #[GeneratedValue]
    #[Column(type: 'integer')]
    private int $id;

    #[Column(type: 'string', length: 255, nullable: false)]
    private string $hostname;

    #[Column(nullable: false, enumType: DeviceType::class)]
    private DeviceType $deviceType;

    #[Column(nullable: false, enumType: OsType::class)]
    private OsType $osType;

    #[ManyToOne(targetEntity: DeviceOwner::class, cascade: ['persist'], inversedBy: 'devices')]
    #[JoinColumn(name: 'owner_id', referencedColumnName: 'id', nullable: false, onDelete: 'CASCADE')]
    private DeviceOwner $owner;

    public function getId(): int
    {
        return $this->id;
    }

    public function getDeviceType(): DeviceType
    {
        return $this->deviceType;
    }

    public function getHostname(): string
    {
        return $this->hostname;
    }

    public function getOsType(): OsType
    {
        return $this->osType;
    }

    public function getOwner(): DeviceOwner
    {
        return $this->owner;
    }

    public function setDeviceType(DeviceType $deviceType): void
    {
        $this->deviceType = $deviceType;
    }

    public function setHostname(string $hostname): void
    {
        $this->hostname = $hostname;
    }

    public function setOsType(OsType $osType): void
    {
        $this->osType = $osType;
    }

    public function setOwner(DeviceOwner $owner): void
    {
        $this->owner = $owner;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'hostname' => $this->hostname,
            'deviceType' => $this->deviceType,
            'osType' => $this->osType,
            'owner' => $this->owner,
        ];
    }
}