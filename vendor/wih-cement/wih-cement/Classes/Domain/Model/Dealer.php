<?php

declare(strict_types=1);

namespace WihCement\WihCement\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Dealer extends AbstractEntity
{
    protected string $companyName = '';
    protected string $contactPerson = '';
    protected string $email = '';
    protected string $phone = '';
    protected string $region = '';
    protected string $country = '';
    protected string $address = '';
    protected ?float $latitude = null;
    protected ?float $longitude = null;
    protected string $status = 'pending';
    protected bool $isApproved = false;

    public function getCompanyName(): string { return $this->companyName; }
    public function setCompanyName(string $companyName): void { $this->companyName = $companyName; }

    public function getContactPerson(): string { return $this->contactPerson; }
    public function setContactPerson(string $contactPerson): void { $this->contactPerson = $contactPerson; }

    public function getEmail(): string { return $this->email; }
    public function setEmail(string $email): void { $this->email = $email; }

    public function getPhone(): string { return $this->phone; }
    public function setPhone(string $phone): void { $this->phone = $phone; }

    public function getRegion(): string { return $this->region; }
    public function setRegion(string $region): void { $this->region = $region; }

    public function getCountry(): string { return $this->country; }
    public function setCountry(string $country): void { $this->country = $country; }

    public function getAddress(): string { return $this->address; }
    public function setAddress(string $address): void { $this->address = $address; }

    public function getLatitude(): ?float { return $this->latitude; }
    public function setLatitude(?float $latitude): void { $this->latitude = $latitude; }

    public function getLongitude(): ?float { return $this->longitude; }
    public function setLongitude(?float $longitude): void { $this->longitude = $longitude; }

    public function getStatus(): string { return $this->status; }
    public function setStatus(string $status): void { $this->status = $status; }

    public function isApproved(): bool { return $this->isApproved; }
    public function setIsApproved(bool $isApproved): void { $this->isApproved = $isApproved; }
}
