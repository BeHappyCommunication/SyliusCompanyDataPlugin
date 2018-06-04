<?php

declare(strict_types = 1);

namespace BeHappy\SyliusCompanyDataPlugin\Resolver;

use BeHappy\SyliusCompanyDataPlugin\Entity\CompanyDataInterface;

/**
 * Interface CompanyDataResolverInterface
 *
 * @package BeHappy\SyliusCompanyDataPlugin\Resolver
 */
interface CompanyDataResolverInterface
{
    /**
     * @return CompanyDataInterface|null
     */
    public function resolveCompanyData(): ?CompanyDataInterface;
}