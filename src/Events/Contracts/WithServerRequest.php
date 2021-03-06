<?php

namespace AvtoDev\RoadRunnerLaravel\Events\Contracts;

use Psr\Http\Message\ServerRequestInterface;

interface WithServerRequest
{
    /**
     * Get server request instance.
     *
     * @return ServerRequestInterface
     */
    public function serverRequest(): ServerRequestInterface;
}
