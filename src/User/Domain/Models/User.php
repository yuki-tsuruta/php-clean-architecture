<?php
namespace User\Domain\Models;

class User {
  private int $id;
  private string $name;

  public function __construct(string &name) {
    $this->name = $name;
  }

  public function getId(): int {
    return $this->id;
  }

  public function getName(): string {
    return $this->name;
  }
}
?>
