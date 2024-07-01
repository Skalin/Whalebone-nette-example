<?php

declare(strict_types=1);


namespace App\Whalebone\DeviceModule\Request;

use App\Whalebone\DeviceModule\Enums\DeviceType;
use App\Whalebone\DeviceModule\Enums\OsType;
use Nette\Schema\Elements\Structure;
use Nette\Schema\Expect;
use Nette\Schema\Processor;

class DeviceSchemaValidator
{

    public function getSchema(): Structure
    {

        return Expect::structure([
            'hostname' => Expect::string()->required(),
            'deviceType' => Expect::anyOf(...DeviceType::values())->required()->transform(fn($value) => DeviceType::tryFrom($value)),
            'osType' => Expect::anyOf(...OsType::values())->required()->transform(fn($value) => OsType::tryFrom($value)),
            'owner' => Expect::int()->required()
        ])->castTo(DeviceRequestDTO::class);
    }

    /**
     * @param array<mixed> $data
     * @return DeviceRequestDTO
     */
    public function validate(array $data): DeviceRequestDTO
    {
        try {
            $processor = new Processor();
            /** @var DeviceRequestDTO $data */
            $data = $processor->process($this->getSchema(), $data);
            return $data;
        }
        catch (\Nette\Schema\ValidationException $e) {
            throw new \Nette\Schema\ValidationException($e->getMessage());
        }
    }
}