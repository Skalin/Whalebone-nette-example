<?php

declare(strict_types=1);


namespace App\Whalebone\DeviceModule\Request;

use Nette\Schema\Elements\Structure;
use Nette\Schema\Expect;
use Nette\Schema\Processor;

class DeviceOwnerSchemaValidator
{

    public function getSchema(): Structure
    {

        return Expect::structure([
            'name' => Expect::string()->required(),
            'lastName' => Expect::string()->required(),
        ])->castTo(DeviceOwnerRequestDTO::class);
    }

    /**
     * @param array<mixed> $data
     */
    public function validate(array $data): DeviceOwnerRequestDTO
    {
        try {
            $processor = new Processor();
            /** @var DeviceOwnerRequestDTO $data */
            $data = $processor->process($this->getSchema(), $data);
            return $data;
        }
        catch (\Nette\Schema\ValidationException $e) {
            throw new \Nette\Schema\ValidationException($e->getMessage());
        }
    }
}