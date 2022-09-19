<?php

namespace Filipecristian\ExampleMocksStubSpy\Model;

class UserModel
{
    private string $name = '';
    private string $cpf = '';

    /**
     * @return string
     */
    public function getNameByUid(string $uid): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     */
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }
}
