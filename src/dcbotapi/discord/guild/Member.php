<?php

namespace dcbotapi\discord\guild;

use dcbotapi\discord\other\User;

class Member {
    private $data = [], $user;

    public function __construct(array $data){
        $this->data = $data;
        $this->user = new User($this->data["user"]);
    }

    public function getId(): string{
        return $this->data["id"];
    }

    public function getNickName(): ?string{
        return !empty($this->data["nick"]) ? $this->data["nick"] : null;
    }

    public function isBot(): bool{
        return (isset($this->data["bot"]) && $this->data["bot"]);
    }

    public function isMuted(): bool{
        return $this->data["mute"];
    }

    public function isDeaf(): bool{
        return $this->data["deaf"];
    }

    public function getUser(): User{
        return $this->user;
    }
}