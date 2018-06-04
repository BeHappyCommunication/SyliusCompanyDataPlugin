<?php

declare(strict_types = 1);

namespace BeHappy\SyliusCompanyDataPlugin\Resolver;

use BeHappy\SyliusCompanyDataPlugin\Entity\CompanyDataInterface;
use BeHappy\SyliusCompanyDataPlugin\Repository\CompanyDataRepositoryInterface;

/**
 * Class CompanyDataResolver
 *
 * @package BeHappy\SyliusCompanyDataPlugin\Resolver
 */
final class CompanyDataResolver implements CompanyDataResolverInterface
{
    /** @var CompanyDataRepositoryInterface */
    private $companyDataRepository;
    
    /**
     * CompanyDataResolver constructor.
     *
     * @param CompanyDataRepositoryInterface $companyDataRepository
     */
    public function __construct(CompanyDataRepositoryInterface $companyDataRepository)
    {
        $this->companyDataRepository = $companyDataRepository;
    }
    
    /**
     * @return CompanyDataInterface|null
     */
    public function resolveCompanyData(): ?CompanyDataInterface
    {
        return $this->companyDataRepository->findCompanyData();
    }
}