<?php

declare(strict_types=1);

namespace App\Whalebone\DeviceModule\Presenters;


use App\Whalebone\DeviceModule\Models\Device;
use App\Whalebone\DeviceModule\Request\DeviceSchemaValidator;
use App\Whalebone\DeviceModule\Request\JsonRequestBodyReader;
use App\Whalebone\DeviceModule\Services\DeviceFetchService;
use App\Whalebone\DeviceModule\Services\DeviceManagerService;
use Nette\Application\UI\Presenter;

final class DevicePresenter extends Presenter
{

    public function __construct(private readonly DeviceManagerService $deviceManagerService, private readonly DeviceFetchService $deviceFetchService, private readonly DeviceSchemaValidator $deviceSchemaStructure, private readonly JsonRequestBodyReader $bodyReader)
    {
        parent::__construct();
    }

    public function actionList(): void
    {
        $this->sendJson(
            $this->deviceFetchService->getAll()
        );
    }

    public function actionDetail(int $id): void
    {
        $this->sendJson(
            $this->deviceFetchService->get($id)
        );
    }


    public function actionCreate(): Device
    {
        $data = $this->deviceSchemaStructure->validate(
            $this->bodyReader->getBody()
        );
        return $this->sendJson(
            $this->deviceManagerService->create($data)
        );
    }

    public function actionUpdate(int $id): Device
    {

        $data = $this->deviceSchemaStructure->validate(
            $this->bodyReader->getBody()
        );
        return $this->sendJson(
            $this->deviceManagerService->update(
                $this->deviceFetchService->get($id),
                $data
            )
        );
    }

    public function actionDelete(int $id): void
    {
        $this->deviceManagerService->delete($this->deviceFetchService->get($id));
        $this->sendJson([]);
    }
}