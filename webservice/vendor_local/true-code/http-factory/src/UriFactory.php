<?php

namespace TrueCode\Http\Factory;

use Psr\Http\Message\UriInterface;
use TrueStd\Http\Factory\UriFactoryInterface;
use Zend\Diactoros\Uri;

class UriFactory implements UriFactoryInterface
{
    public function createUri($uri = '') : UriInterface
    {
        return new Uri($uri);
    }
}