<?php

namespace App\Http\Services\CoR;

abstract class PackageHandler
{
    protected $nextHandler;

    public function setNext(PackageHandler $handler)
    {
        $this->nextHandler = $handler;
    }

    public function handle($package)
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($package);
        }
        return $package;
    }
}
