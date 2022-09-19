<?php

namespace Tests;

use Filipecristian\ExampleMocksStubSpy\Model\UserModel;
use Filipecristian\ExampleMocksStubSpy\Service\UserService;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryTestCase as TestCase;

class ExampleTestMock extends TestCase
{
    public function testShouldConvertNameToUpperCase(): void
    {
        // Arrange
        $mock = Mockery::mock(UserModel::class);
        $mock->shouldReceive('getNameByUid')
            ->once()
            ->with('1225acsshy2');
        $userService = new UserService($mock);

        // Act
        $userService->getUserNameUpperCase('1225acsshy2');

        // Assert
        // Prória Lib do Mockery faz após a execução do método.
    }
}
