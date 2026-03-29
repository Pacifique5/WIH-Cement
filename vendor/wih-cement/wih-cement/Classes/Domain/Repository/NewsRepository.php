<?php

declare(strict_types=1);

namespace WihCement\WihCement\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;

class NewsRepository extends Repository
{
    protected $defaultOrderings = ['publishDate' => QueryInterface::ORDER_DESCENDING];

    public function findByType(string $type): array
    {
        $query = $this->createQuery();
        $query->matching($query->equals('newsType', $type));
        return $query->execute()->toArray();
    }

    public function findLatest(int $limit = 3): array
    {
        $query = $this->createQuery();
        $query->setLimit($limit);
        return $query->execute()->toArray();
    }
}
