<?php

namespace Filipecristian\ExampleMocksStubSpy\Service;

class RedisService
{
    public function getContent(string $key): string
    {
        return $key;
    }
}
