<?php

namespace Filipecristian\ExampleMocksStubSpy\Service;

use Filipecristian\ExampleMocksStubSpy\Model\UserModel;

class UserService
{
    protected const REDIS_KEY = 'U123C';

    public function __construct(
        private readonly UserModel $userModel,
        private readonly RedisService $redisService
    ) {
    }

    public function getUserNameUpperCase(string $uid): string
    {
        return strtoupper($this->userModel->getNameByUid($uid));
    }

    public function getUserRedis(string $uid): string
    {
        return $this->redisService->getContent(sprintf('%s_%s', $uid, self::REDIS_KEY));
    }
}
