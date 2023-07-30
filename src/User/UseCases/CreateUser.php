<?php
namespace User\UseCases;

use User\Domain\Models\User;
use User\UseCases\IUserRepository;

class CreateUser {
    private IUserRepository $userRepository;

    public function __construct(IUserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function execute(string $name): User {
        $user = new User($name);
        return $this->userRepository->createUser($user);
    }
}
?>
