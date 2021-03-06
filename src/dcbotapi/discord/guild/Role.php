<?php

namespace dcbotapi\discord\guild;

class Role {
    private $data = [];

    public const DEFAULT_COLOR = 0;

    public function __construct(array $data){
        $this->data = $data;
    }

    public function getId(): string{
        return $this->data["id"];
    }

    public function getName(): string{
        return $this->data["name"];
    }

    public function getColor(): int{
        return $this->data["color"];
    }

    public function getPermissions(): int{
        return $this->data["permissions"];
    }
}