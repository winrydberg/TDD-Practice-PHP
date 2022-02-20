<?php

namespace App\Models;

class User
{

    public string $first_name;
    public string $last_name;
    public string $email;


    public function setFirstName($firstName): void
    {
        $this->first_name = trim($firstName);
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }


    public function setLastName($lastName): void
    {
        $this->last_name = trim($lastName);
    }


    public function getLastName(): string
    {
        return $this->last_name;
    }


    public function getFullName(): string
    {
        return "$this->first_name $this->last_name";
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getEmailVariables(): array
    {
        return [
            'full_name' => $this->getFullName(),
            'email' => $this->getEmail()
        ];
    }
}