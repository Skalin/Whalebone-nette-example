<?php

declare(strict_types=1);


namespace App\Whalebone\DeviceModule\Repositories;

use App\Whalebone\DeviceModule\Models\Device;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityNotFoundException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\Persistence\ObjectRepository;

/**
 * @extends EntityRepository<Device>
 */
class DeviceRepository extends EntityRepository
{


    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, $entityManager->getClassMetadata(Device::class));
    }

    /**
     * @return ObjectRepository<Device>
     */
    private function getRepository(): ObjectRepository
    {
        return $this->entityManager->getRepository(Device::class);
    }

    /**
     * @return array<Device>|Device[]
     */
    public function getAll(): array
    {
        return $this->getRepository()->findAll();
    }

    /**
     * @return array<Device>|Device[]
     */
    public function getByOwner(int $ownerId): array
    {
        return $this->getRepository()->findBy(['owner' => $ownerId]);
    }

    /**
     * @throws EntityNotFoundException
     */
    public function getById(int $id): ?Device
    {

        $entity = $this->getRepository()->find($id);
        if ($entity === null) {
            throw new EntityNotFoundException("Device with id $id not found");
        }
        return $entity;
    }

    public function save(Device $device, bool $flush = true): void
    {
        $this->entityManager->persist($device);
        if ($flush) {
            $this->entityManager->flush();
        }
    }

    public function delete(Device $device): void
    {
        $this->entityManager->remove($device);
        $this->entityManager->flush();
    }

}