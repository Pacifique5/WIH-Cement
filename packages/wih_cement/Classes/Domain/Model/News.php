<?php

declare(strict_types=1);

namespace WihCement\WihCement\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class News extends AbstractEntity
{
    protected string $title = '';
    protected string $slug = '';
    protected string $content = '';
    protected string $teaser = '';
    protected ?\DateTime $date = null;

    public function getTitle(): string { return $this->title; }
    public function setTitle(string $title): void { $this->title = $title; }
    public function getSlug(): string { return $this->slug; }
    public function setSlug(string $slug): void { $this->slug = $slug; }
    public function getContent(): string { return $this->content; }
    public function setContent(string $content): void { $this->content = $content; }
    public function getTeaser(): string { return $this->teaser; }
    public function setTeaser(string $teaser): void { $this->teaser = $teaser; }
    public function getDate(): ?\DateTime { return $this->date; }
    public function setDate(?\DateTime $date): void { $this->date = $date; }
}
