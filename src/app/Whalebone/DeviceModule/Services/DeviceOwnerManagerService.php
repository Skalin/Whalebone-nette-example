<?php

declare(strict_types=1);


namespace App\Whalebone\DeviceModule\Services;

use App\Whalebone\DeviceModule\Models\DeviceOwner;
use App\Whalebone\DeviceModule\Repositories\DeviceOwnerRepository;
use App\Whalebone\DeviceModule\Request\DeviceOwnerRequestDTO;

class DeviceOwnerManagerService
{
    public function __construct(private readonly DeviceOwnerRepository $deviceOwnerRepository)
    {
    }

    public function delete(DeviceOwner $deviceOwner): void
    {
        $this->deviceOwnerRepository->delete($deviceOwner);
    }

    public function create(DeviceOwnerRequestDTO $request): DeviceOwner
    {
        $deviceOwner = new DeviceOwner();
        $this->setDataFromRequest($deviceOwner, $request);
        $this->save($deviceOwner);
        return $deviceOwner;
    }

    public function update(DeviceOwner $deviceOwner, DeviceOwnerRequestDTO $request): DeviceOwner
    {
        $this->setDataFromRequest($deviceOwner, $request);
        $this->save($deviceOwner);
        return $deviceOwner;
    }

    private function setDataFromRequest(DeviceOwner $deviceOwner, DeviceOwnerRequestDTO $request): void
    {
        $deviceOwner->setName($request->getName());
        $deviceOwner->setLastName($request->getLastName());
    }

    private function save(DeviceOwner $deviceOwner): void
    {
        $this->deviceOwnerRepository->save($deviceOwner);
    }
}