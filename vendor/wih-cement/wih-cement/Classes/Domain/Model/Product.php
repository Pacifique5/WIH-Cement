<?php

declare(strict_types=1);

namespace WihCement\WihCement\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Product extends AbstractEntity
{
    protected string $name = '';
    protected string $slug = '';
    protected string $category = '';
    protected string $shortDescription = '';
    protected string $description = '';
    protected string $technicalSpecs = '';
    protected string $applications = '';
    protected string $performanceData = '';
    protected string $packagingDetails = '';
    protected string $safetyInformation = '';
    protected bool $isFeatured = false;

    /** @var ObjectStorage<FileReference> */
    protected ObjectStorage $image;

    /** @var ObjectStorage<FileReference> */
    protected ObjectStorage $datasheet;

    public function __construct()
    {
        $this->image = new ObjectStorage();
        $this->datasheet = new ObjectStorage();
    }

    public function getName(): string { return $this->name; }
    public function setName(string $name): void { $this->name = $name; }

    public function getSlug(): string { return $this->slug; }
    public function setSlug(string $slug): void { $this->slug = $slug; }

    public function getCategory(): string { return $this->category; }
    public function setCategory(string $category): void { $this->category = $category; }

    public function getShortDescription(): string { return $this->shortDescription; }
    public function setShortDescription(string $shortDescription): void { $this->shortDescription = $shortDescription; }

    public function getDescription(): string { return $this->description; }
    public function setDescription(string $description): void { $this->description = $description; }

    public function getTechnicalSpecs(): string { return $this->technicalSpecs; }
    public function setTechnicalSpecs(string $technicalSpecs): void { $this->technicalSpecs = $technicalSpecs; }

    public function getApplications(): string { return $this->applications; }
    public function setApplications(string $applications): void { $this->applications = $applications; }

    public function getPerformanceData(): string { return $this->performanceData; }
    public function setPerformanceData(string $performanceData): void { $this->performanceData = $performanceData; }

    public function getPackagingDetails(): string { return $this->packagingDetails; }
    public function setPackagingDetails(string $packagingDetails): void { $this->packagingDetails = $packagingDetails; }

    public function getSafetyInformation(): string { return $this->safetyInformation; }
    public function setSafetyInformation(string $safetyInformation): void { $this->safetyInformation = $safetyInformation; }

    public function isFeatured(): bool { return $this->isFeatured; }
    public function setIsFeatured(bool $isFeatured): void { $this->isFeatured = $isFeatured; }

    public function getImage(): ObjectStorage { return $this->image; }
    public function setImage(ObjectStorage $image): void { $this->image = $image; }

    public function getDatasheet(): ObjectStorage { return $this->datasheet; }
    public function setDatasheet(ObjectStorage $datasheet): void { $this->datasheet = $datasheet; }
}
