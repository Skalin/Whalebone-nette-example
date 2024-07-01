<?php

declare(strict_types=1);


namespace App\Whalebone\DeviceModule\Services;

use App\Whalebone\DeviceModule\Models\Device;
use App\Whalebone\DeviceModule\Models\DeviceOwner;
use App\Whalebone\DeviceModule\Repositories\DeviceRepository;
use App\Whalebone\DeviceModule\Request\DeviceRequestDTO;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityNotFoundException;

class DeviceManagerService
{
    public function __construct(private readonly EntityManagerInterface $entityManager, private readonly DeviceRepository $deviceRepository)
    {
    }

    public function delete(Device $device): void
    {
        $this->deviceRepository->delete($device);
    }

    /**
     * @throws EntityNotFoundException
     */
    public function create(DeviceRequestDTO $request): Device
    {
        $device = new Device();
        $this->setDataFromRequest($device, $request);
        $this->save($device);
        return $device;
    }

    /**
     * @throws EntityNotFoundException
     */
    public function update(Device $device, DeviceRequestDTO $request): Device
    {
        $this->setDataFromRequest($device, $request);
        $this->save($device);
        return $device;
    }

    /**
     * @throws EntityNotFoundException
     */
    private function setDataFromRequest(Device $device, DeviceRequestDTO $request): void
    {
        $device->setHostname($request->getHostname());
        $device->setDeviceType($request->getDeviceType());
        $device->setOsType($request->getOsType());
        $ownerEntity = $this->entityManager->find(DeviceOwner::class, $request->getOwner());
        if ($ownerEntity === null)
        {
            throw new EntityNotFoundException("DeviceOwner with id {$request->getOwner()} not found");
        }
        $device->setOwner($ownerEntity);
    }

    private function save(Device $device): void
    {
        $this->deviceRepository->save($device);
    }
}