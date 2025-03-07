<?php

class UserBuilder {
    private string $name;
    private string $email;
    private int $age;

    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    public function setEmail(string $email): self {
        $this->email = $email;
        return $this;
    }

    public function setAge(int $age): self {
        $this->age = $age;
        return $this;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function build(): User {
        return new User($this);
    }
}
?>