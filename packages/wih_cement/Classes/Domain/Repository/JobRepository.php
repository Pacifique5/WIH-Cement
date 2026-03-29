<?php

declare(strict_types=1);

namespace WihCement\WihCement\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;

class JobRepository extends Repository
{
    protected $defaultOrderings = ['deadline' => QueryInterface::ORDER_ASCENDING];

    public function findActiveJobs(): array
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalOr(
                $query->equals('deadline', null),
                $query->greaterThanOrEqual('deadline', new \DateTime())
            )
        );
        return $query->execute()->toArray();
    }

    public function findByDepartment(string $department): array
    {
        $query = $this->createQuery();
        $query->matching($query->equals('department', $department));
        return $query->execute()->toArray();
    }

    public function findInternships(): array
    {
        $query = $this->createQuery();
        $query->matching($query->equals('isInternship', true));
        return $query->execute()->toArray();
    }
}
