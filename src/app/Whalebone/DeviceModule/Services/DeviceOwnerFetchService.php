<?php

declare(strict_types=1);


namespace App\Whalebone\DeviceModule\Services;

use App\Whalebone\DeviceModule\Models\DeviceOwner;
use App\Whalebone\DeviceModule\Repositories\DeviceOwnerRepository;
use Doctrine\ORM\EntityNotFoundException;

class DeviceOwnerFetchService
{
    public function __construct(private readonly DeviceOwnerRepository $deviceOwnerRepository)
    {
    }

    /**
     * @return array<DeviceOwner>|DeviceOwner[]
     */
    public function getAll(): array
    {
        return $this->deviceOwnerRepository->getAll();
    }

    public function get(int $id): DeviceOwner
    {
        $entity = $this->deviceOwnerRepository->getById($id);
        if ($entity === null)
        {
            throw new EntityNotFoundException("DeviceOwner with id $id not found");
        }
        return $entity;
    }
}