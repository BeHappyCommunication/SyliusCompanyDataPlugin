<?php

declare(strict_types = 1);

namespace BeHappy\SyliusCompanyDataPlugin\Repository;

use BeHappy\SyliusCompanyDataPlugin\Entity\CompanyDataInterface;
use Doctrine\ORM\QueryBuilder;
use Sylius\Component\Core\Model\ChannelInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;

/**
 * Interface CompanyDataRepositoryInterface
 *
 * @package BeHappy\SyliusCompanyDataPlugin\Repository
 */
interface CompanyDataRepositoryInterface extends RepositoryInterface
{
    /**
     * @return QueryBuilder
     */
    public function createListQueryBuilder(): QueryBuilder;
    
    /**
     * @return CompanyDataInterface|null
     */
    public function findCompanyData(): ?CompanyDataInterface;
    
    /**
     * @param ChannelInterface $channel
     *
     * @return CompanyDataInterface|null
     */
    public function findOneByChannel(ChannelInterface $channel): ?CompanyDataInterface;
}