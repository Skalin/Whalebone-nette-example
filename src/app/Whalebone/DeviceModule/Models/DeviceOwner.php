<?php

declare(strict_types=1);


namespace App\Whalebone\DeviceModule\Models;

use App\Whalebone\DeviceModule\Repositories\DeviceOwnerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\PersistentCollection;

#[Entity(repositoryClass: DeviceOwnerRepository::class)]
class DeviceOwner implements \JsonSerializable
{

    #[Id]
    #[GeneratedValue]
    #[Column(type: 'integer')]
    private int $id;

    #[Column(type: 'string', length: 255, nullable: false)]
    private string $name;

    #[Column(type: 'string', length: 255, nullable: false)]
    private string $lastName;

    /**
     * @var Collection<int,Device> $devices
     */
    #[OneToMany(mappedBy: 'owner', targetEntity: Device::class)]
    #[JoinColumn(name: 'owner_id', referencedColumnName: 'id')]
    private Collection $devices;

    public function __construct()
    {
        $this->devices = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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

    /**
     * @return Collection<int,Device>
     */
    public function getDevices(): Collection
    {
        return $this->devices;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'lastName' => $this->lastName,
        ];
    }
}