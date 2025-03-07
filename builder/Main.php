<?php

require_once 'User.php';
require_once 'UserBuilder.php';


class Main {
    public static function main() {
        $builder = new UserBuilder();
        $user = $builder->setName("Leonardo Silva")
                        ->setEmail("teste@email.com")
                        ->setAge(24)
                        ->build();

        echo $user;
    }
}

Main::main();

?>
