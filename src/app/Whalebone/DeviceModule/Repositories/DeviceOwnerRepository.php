<?php

declare(strict_types=1);


namespace App\Whalebone\DeviceModule\Repositories;

use App\Whalebone\DeviceModule\Models\DeviceOwner;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ObjectRepository;

/**
 * @extends EntityRepository<DeviceOwner>
 */
class DeviceOwnerRepository extends EntityRepository
{


    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, $entityManager->getClassMetadata(DeviceOwner::class));
    }

    /**
     * @return ObjectRepository<DeviceOwner>
     */
    private function getRepository(): ObjectRepository
    {
        return $this->entityManager->getRepository(DeviceOwner::class);
    }

    public function getById(int $id): ?DeviceOwner
    {
        return $this->getRepository()->find($id);
    }

    public function save(DeviceOwner $device): void
    {
        $this->entityManager->persist($device);
        $this->entityManager->flush();
    }

    public function delete(DeviceOwner $device): void
    {
        $this->entityManager->remove($device);
        $this->entityManager->flush();
    }

    /**
     * @return DeviceOwner[]|array<DeviceOwner>
     */
    public function getAll(): array
    {
        return $this->findAll();
    }

}