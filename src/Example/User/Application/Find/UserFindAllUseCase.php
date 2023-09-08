<?php

namespace Src\Example\User\Application\Find;

final class UserFindAllUseCase
{
    public function __contruct()
    {

    }

    public function __invoke(): array
    {
        return ["Hola mundo desde el caso de uso"];
    }
}