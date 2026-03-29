<?php

declare(strict_types=1);

namespace WihCement\WihCement\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Job extends AbstractEntity
{
    protected string $title = '';
    protected string $department = '';
    protected string $jobType = 'full-time';
    protected string $location = '';
    protected ?\DateTime $deadline = null;
    protected string $description = '';
    protected string $requirements = '';
    protected bool $isInternship = false;

    public function getTitle(): string { return $this->title; }
    public function setTitle(string $title): void { $this->title = $title; }

    public function getDepartment(): string { return $this->department; }
    public function setDepartment(string $department): void { $this->department = $department; }

    public function getJobType(): string { return $this->jobType; }
    public function setJobType(string $jobType): void { $this->jobType = $jobType; }

    public function getLocation(): string { return $this->location; }
    public function setLocation(string $location): void { $this->location = $location; }

    public function getDeadline(): ?\DateTime { return $this->deadline; }
    public function setDeadline(?\DateTime $deadline): void { $this->deadline = $deadline; }

    public function getDescription(): string { return $this->description; }
    public function setDescription(string $description): void { $this->description = $description; }

    public function getRequirements(): string { return $this->requirements; }
    public function setRequirements(string $requirements): void { $this->requirements = $requirements; }

    public function isInternship(): bool { return $this->isInternship; }
    public function setIsInternship(bool $isInternship): void { $this->isInternship = $isInternship; }
}
