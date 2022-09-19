<?php

namespace Tests;

use Filipecristian\ExampleMocksStubSpy\Model\UserModel;
use Filipecristian\ExampleMocksStubSpy\Service\RedisService;
use Filipecristian\ExampleMocksStubSpy\Service\UserService;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryTestCase as TestCase;

class ExampleTestSpy extends TestCase
{
    public function testShouldFindUserInRedis(): void
    {
        // Arrange
        $uid = '123';
        $spy = Mockery::spy(RedisService::class);
        $userService = new UserService(new UserModel(), $spy);

        // Act
        $userService->getUserRedis($uid);

        // Assert
        $spy->shouldHaveReceived('getContent')
            ->with('123_U123C');
    }
}
