<?php

declare(strict_types=1);

namespace WihCement\WihCement\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;

class ProductRepository extends Repository
{
    protected $defaultOrderings = ['sorting' => QueryInterface::ORDER_ASCENDING];

    public function findFeatured(): array
    {
        $query = $this->createQuery();
        $query->matching($query->equals('isFeatured', true));
        return $query->execute()->toArray();
    }

    public function findByCategory(string $category): array
    {
        $query = $this->createQuery();
        $query->matching($query->equals('category', $category));
        return $query->execute()->toArray();
    }
}
