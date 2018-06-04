<?php

declare(strict_types = 1);

namespace BeHappy\SyliusCompanyDataPlugin\Repository;

use BeHappy\SyliusCompanyDataPlugin\Entity\CompanyDataInterface;
use Doctrine\ORM\QueryBuilder;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

/**
 * Class CompanyDataRepository
 *
 * @package BeHappy\SyliusCompanyDataPlugin\Repository
 */
final class CompanyDataRepository extends EntityRepository implements CompanyDataRepositoryInterface
{
    /**
     * @return QueryBuilder
     */
    public function createListQueryBuilder(): QueryBuilder
    {
        return $this->createQueryBuilder('cd');
    }
    
    /**
     * @return CompanyDataInterface|null
     *
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findCompanyData(): ?CompanyDataInterface
    {
        return $this->createQueryBuilder('cd')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}