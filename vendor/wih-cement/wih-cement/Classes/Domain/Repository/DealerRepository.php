<?php

declare(strict_types=1);

namespace WihCement\WihCement\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class DealerRepository extends Repository
{
    public function findApprovedDealers(): array
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);
        $query->matching(
            $query->logicalAnd(
                $query->equals('isApproved', true),
                $query->equals('status', 'approved')
            )
        );
        return $query->execute()->toArray();
    }
}
