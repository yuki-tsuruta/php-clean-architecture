<?php
namespace User\Infrastructure\Repositories;

use User\Domain\Models\User;
use User\UseCases\IUserRepository;
use PDO;

class UserRepository implements IUserRepository {
  private PDO $pdo;

  public function __construct(PDO $pdo) {
    $this-> = $pdo;
  }

  public function createUser(User $user): User {
    $stmt = $this->pdo->prepare('INSERT INTO users (name) VALUES (:name)')
    $stmt->execute([':name' => $user->getName()]);
    $user->setId($this->pdo->lastInsertId());
    return $user;
  }
}


?>
