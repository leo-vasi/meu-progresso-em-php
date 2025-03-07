<?php

class User {

    private string $name;
    private string $email;
    private int $age;

    public function __construct(UserBuilder $builder) {
        $this->name = $builder->getName();
        $this->email = $builder->getEmail();
        $this->age = $builder->getAge();
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

    public function __toString(): string {
        return "Nome: {$this->name}, Email: {$this->email}, Idade: {$this->age}";
    }
}

?>
