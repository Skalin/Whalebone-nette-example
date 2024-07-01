<?php

declare(strict_types=1);

namespace App\Whalebone\DeviceModule\Presenters;


use App\Whalebone\DeviceModule\Request\DeviceOwnerSchemaValidator;
use App\Whalebone\DeviceModule\Request\JsonRequestBodyReader;
use App\Whalebone\DeviceModule\Services\DeviceFetchService;
use App\Whalebone\DeviceModule\Services\DeviceOwnerFetchService;
use App\Whalebone\DeviceModule\Services\DeviceOwnerManagerService;
use Nette\Application\UI\Presenter;

final class DeviceOwnerPresenter extends Presenter
{

    public function __construct(private readonly DeviceOwnerManagerService $deviceOwnerManagerService, private readonly DeviceOwnerFetchService $deviceOwnerFetchService, private readonly DeviceFetchService $deviceFetchService, private readonly DeviceOwnerSchemaValidator $deviceOwnerSchemaStructure, private readonly JsonRequestBodyReader $bodyReader)
    {
        parent::__construct();
    }

    public function actionList(): void
    {
        $this->sendJson(
            $this->deviceOwnerFetchService->getAll()
        );
    }

    public function actionDetail(int $id): void
    {
        $this->sendJson(
            $this->deviceOwnerFetchService->get($id)
        );
    }

    public function actionCreate(): void
    {
        $data = $this->deviceOwnerSchemaStructure->validate(
            $this->bodyReader->getBody()
        );
        $this->sendJson(
            $this->deviceOwnerManagerService->create($data)
        );
    }

    public function actionUpdate(int $id): void
    {
        $data = $this->deviceOwnerSchemaStructure->validate(
            $this->bodyReader->getBody()
        );

        $this->sendJson(
            $this->deviceOwnerManagerService->update(
                $this->deviceOwnerFetchService->get($id),
                $data
            )
        );
    }

    public function actionDelete(int $id): void
    {
        $this->deviceOwnerManagerService->delete($this->deviceOwnerFetchService->get($id));
        $this->sendJson([]);
    }

    public function actionDevices(int $id): void
    {
        $this->sendJson(
            $this->deviceFetchService->getByOwner($id)
        );
    }
}