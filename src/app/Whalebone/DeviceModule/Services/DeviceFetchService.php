<?php

declare(strict_types=1);


namespace App\Whalebone\DeviceModule\Services;

use App\Whalebone\DeviceModule\Models\Device;
use App\Whalebone\DeviceModule\Repositories\DeviceRepository;
use Doctrine\ORM\EntityNotFoundException;

class DeviceFetchService
{
    public function __construct(private readonly DeviceRepository $deviceRepository)
    {
    }

    /**
     * @param int $ownerId
     * @return array<Device>|Device[]
     * @throws EntityNotFoundException
     */
    public function getByOwner(int $ownerId): array
    {
        $entity = $this->get($ownerId);
        return $this->deviceRepository->getByOwner($entity->getId());
    }

    /**
     * @return array<Device>|Device[]
     */
    public function getAll(): array
    {
        return $this->deviceRepository->getAll();
    }

    /**
     * @throws EntityNotFoundException
     */
    public function get(int $id): Device
    {
        $entity = $this->deviceRepository->getById($id);
        if ($entity === null) {
            throw new EntityNotFoundException("DeviceOwner with id $id not found");
        }
        return $entity;
    }
}