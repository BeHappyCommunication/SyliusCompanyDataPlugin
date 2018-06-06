<?php

declare(strict_types = 1);

namespace BeHappy\SyliusCompanyDataPlugin\Repository;

use BeHappy\SyliusCompanyDataPlugin\Entity\CompanyDataInterface;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\QueryBuilder;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;
use Sylius\Component\Core\Model\ChannelInterface;

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
    
    /**
     * @param ChannelInterface $channel
     *
     * @return CompanyDataInterface|null
     */
    public function findOneByChannel(ChannelInterface $channel): ?CompanyDataInterface
    {
        $qb = $this->createQueryBuilder('cd')
            ->join('cd.channels', 'channels')
            ->where('channels.id IN (:channels)')
            ->setParameter('channels', [$channel->getId()])
            ->setMaxResults(1)
        ;
        
        try {
            return $qb->getQuery()->getOneOrNullResult();
        } catch (NonUniqueResultException $exception) {
            return null;
        }
    }
}