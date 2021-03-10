<?php

declare(strict_types=1);

namespace FastnTech\FormPlugin\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;

interface ContactInterface extends ResourceInterface
{
    public function getEmail(): ?string;

    public function setEmail(?string $email): void;

    public function getFullName(): ?string;

    public function setFullName(?string $fullName): void;

    public function getMessage(): ?string;

    public function setMessage(?string $message): void;
}