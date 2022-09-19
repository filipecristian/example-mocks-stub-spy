<?php

namespace Filipecristian\ExampleMocksStubSpy\Service;

use Filipecristian\ExampleMocksStubSpy\Model\UserModel;

class UserService
{
    public function __construct(private readonly UserModel $userModel)
    {
    }

    public function getUserNameUpperCase(string $uid): string
    {
        return strtoupper($this->userModel->getNameByUid($uid));
    }
}
