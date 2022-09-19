<?php

namespace Tests;

use Filipecristian\ExampleMocksStubSpy\Model\UserModel;
use Filipecristian\ExampleMocksStubSpy\Service\UserService;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryTestCase as TestCase;

class ExampleTestStub extends TestCase
{
    public function testShouldConvertNameToUpperCase(): void
    {
        // Arrange
        $mock = Mockery::mock(UserModel::class);
        $mock->shouldReceive('getNameByUid')->andReturn('filipe');
        $userService = new UserService($mock);

        // Act
        $name = $userService->getUserNameUpperCase('1225acsshy2');

        // Assert
        self::assertEquals('FILIPE', $name);
    }
}
