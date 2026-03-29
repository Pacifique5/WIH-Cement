<?php

declare(strict_types=1);

namespace WihCement\WihCement\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Application extends AbstractEntity
{
    protected ?Job $job = null;
    protected string $fullName = '';
    protected string $email = '';
    protected string $phone = '';
    protected string $coverLetter = '';
    protected string $status = 'pending';

    public function getJob(): ?Job { return $this->job; }
    public function setJob(?Job $job): void { $this->job = $job; }

    public function getFullName(): string { return $this->fullName; }
    public function setFullName(string $fullName): void { $this->fullName = $fullName; }

    public function getEmail(): string { return $this->email; }
    public function setEmail(string $email): void { $this->email = $email; }

    public function getPhone(): string { return $this->phone; }
    public function setPhone(string $phone): void { $this->phone = $phone; }

    public function getCoverLetter(): string { return $this->coverLetter; }
    public function setCoverLetter(string $coverLetter): void { $this->coverLetter = $coverLetter; }

    public function getStatus(): string { return $this->status; }
    public function setStatus(string $status): void { $this->status = $status; }
}
