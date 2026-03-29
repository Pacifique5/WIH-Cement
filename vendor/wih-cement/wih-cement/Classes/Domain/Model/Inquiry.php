<?php

declare(strict_types=1);

namespace WihCement\WihCement\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Inquiry extends AbstractEntity
{
    protected ?Product $product = null;
    protected string $fullName = '';
    protected string $company = '';
    protected string $email = '';
    protected string $phone = '';
    protected string $quantity = '';
    protected string $message = '';
    protected string $inquiryType = 'general';
    protected string $status = 'new';

    public function getProduct(): ?Product { return $this->product; }
    public function setProduct(?Product $product): void { $this->product = $product; }

    public function getFullName(): string { return $this->fullName; }
    public function setFullName(string $fullName): void { $this->fullName = $fullName; }

    public function getCompany(): string { return $this->company; }
    public function setCompany(string $company): void { $this->company = $company; }

    public function getEmail(): string { return $this->email; }
    public function setEmail(string $email): void { $this->email = $email; }

    public function getPhone(): string { return $this->phone; }
    public function setPhone(string $phone): void { $this->phone = $phone; }

    public function getQuantity(): string { return $this->quantity; }
    public function setQuantity(string $quantity): void { $this->quantity = $quantity; }

    public function getMessage(): string { return $this->message; }
    public function setMessage(string $message): void { $this->message = $message; }

    public function getInquiryType(): string { return $this->inquiryType; }
    public function setInquiryType(string $inquiryType): void { $this->inquiryType = $inquiryType; }

    public function getStatus(): string { return $this->status; }
    public function setStatus(string $status): void { $this->status = $status; }
}
