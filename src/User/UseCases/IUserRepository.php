<?php
namespace User\UseCases;

use User\Domain\Models\User;

interface IUserRepository {
  public function createUser(User $user): User;
}
?>
