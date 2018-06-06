<?php

declare(strict_types = 1);

namespace BeHappy\SyliusCompanyDataPlugin\Entity;

use Doctrine\Common\Collections\Collection;
use Sylius\Component\Core\Model\ChannelInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * Interface CompanyDataInterface
 *
 * @package BeHappy\SyliusCompanyDataPlugin\Entity
 */
interface BaseCompanyDataInterface extends ResourceInterface
{
    /**
     * @return null|string
     */
    public function getName(): ?string;
    
    /**
     * @param null|string $name
     */
    public function setName(?string $name): void;
    
    /**
     * @return null|string
     */
    public function getVatNumber(): ?string;
    
    /**
     * @param null|string $vatNumber
     */
    public function setVatNumber(?string $vatNumber): void;
    
    /**
     * @return null|string
     */
    public function getAddressNumber(): ?string;
    
    /**
     * @param null|string $addressNumber
     */
    public function setAddressNumber(?string $addressNumber): void;
    
    /**
     * @return null|string
     */
    public function getAddressStreet(): ?string;
    
    /**
     * @param null|string $addressStreet
     */
    public function setAddressStreet(?string $addressStreet): void;
    
    /**
     * @return null|string
     */
    public function getAddressStreetExtension(): ?string;
    
    /**
     * @param null|string $addressStreetExtension
     */
    public function setAddressStreetExtension(?string $addressStreetExtension): void;
    
    /**
     * @return null|string
     */
    public function getAddressZipCode(): ?string;
    
    /**
     * @param null|string $addressZipCode
     */
    public function setAddressZipCode(?string $addressZipCode): void;
    
    /**
     * @return null|string
     */
    public function getAddressCountry(): ?string;
    
    /**
     * @param null|string $addressCountry
     */
    public function setAddressCountry(?string $addressCountry): void;
    
    /**
     * @return null|string
     */
    public function getSiret(): ?string;
    
    /**
     * @param null|string $siret
     */
    public function setSiret(?string $siret): void;
    
    /**
     * @return string
     */
    public function getInformation(): ?string;
    
    /**
     * @param string $information
     */
    public function setInformation(string $information): void;
}