<?php

declare(strict_types=1);


namespace App\Whalebone\DeviceModule\Request;

use Nette\Http\Request;

class JsonRequestBodyReader
{
    public function __construct(private readonly Request $request)
    {
    }

    /**
     * @return array<mixed>
     */
    public function getBody(): array
    {
        if ($this->getRequest()->getRawBody() === null) {
            return [];
        }

        $data = json_decode($this->getRequest()->getRawBody(), true);
        if (!is_array($data))
        {
            return [];
        }
        else
        {
            return $data;
        }
    }

    public function getRequest(): Request
    {
        return $this->request;
    }
}