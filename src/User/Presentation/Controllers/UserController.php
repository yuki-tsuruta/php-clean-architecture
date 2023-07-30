<?php
namespace User\Presentation\Controllers;

use User\UseCases\CreateUser;

class UserController {
    private CreateUser $createUser;

    public function __construct(CreateUser $createUser) {
        $this->createUser = $createUser;
    }

    public function create(string $name): void {
        $this->createUser->execute($name);
    }
}
?>
