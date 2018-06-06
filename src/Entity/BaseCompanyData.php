<?php

declare(strict_types = 1);

namespace BeHappy\SyliusCompanyDataPlugin\Entity;

/**
 * Class CompanyData
 *
 * @package BeHappy\SyliusCompanyDataPlugin\Entity
 */
class BaseCompanyData implements BaseCompanyDataInterface
{
    /** @var */
    protected $id;
    /** @var string */
    protected $name = '';
    /** @var string */
    protected $addressNumber = '';
    /** @var string */
    protected $addressStreet = '';
    /** @var string */
    protected $addressStreetExtension = '';
    /** @var string */
    protected $addressZipCode = '';
    /** @var string */
    protected $addressCountry = '';
    /** @var string */
    protected $vatNumber = '';
    /** @var string */
    protected $siret = '';
    /** @var string */
    protected $information = '';
    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    
    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    
    /**
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    
    /**
     * @return string
     */
    public function getAddressNumber(): ?string
    {
        return $this->addressNumber;
    }
    
    /**
     * @param string $addressNumber
     */
    public function setAddressNumber(?string $addressNumber): void
    {
        $this->addressNumber = $addressNumber;
    }
    
    /**
     * @return string
     */
    public function getAddressStreet(): ?string
    {
        return $this->addressStreet;
    }
    
    /**
     * @param string $addressStreet
     */
    public function setAddressStreet(?string $addressStreet): void
    {
        $this->addressStreet = $addressStreet;
    }
    
    /**
     * @return string
     */
    public function getAddressStreetExtension(): ?string
    {
        return $this->addressStreetExtension;
    }
    
    /**
     * @param string $addressStreetExtension
     */
    public function setAddressStreetExtension(?string $addressStreetExtension): void
    {
        $this->addressStreetExtension = $addressStreetExtension;
    }
    
    /**
     * @return string
     */
    public function getAddressZipCode(): ?string
    {
        return $this->addressZipCode;
    }
    
    /**
     * @param string $addressZipCode
     */
    public function setAddressZipCode(?string $addressZipCode): void
    {
        $this->addressZipCode = $addressZipCode;
    }
    
    /**
     * @return string
     */
    public function getAddressCountry(): ?string
    {
        return $this->addressCountry;
    }
    
    /**
     * @param string $addressCountry
     */
    public function setAddressCountry(?string $addressCountry): void
    {
        $this->addressCountry = $addressCountry;
    }
    
    /**
     * @return string
     */
    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }
    
    /**
     * @param string $vatNumber
     */
    public function setVatNumber(?string $vatNumber): void
    {
        $this->vatNumber = $vatNumber;
    }
    
    /**
     * @return string
     */
    public function getSiret(): ?string
    {
        return $this->siret;
    }
    
    /**
     * @param string $siret
     */
    public function setSiret(?string $siret): void
    {
        $this->siret = $siret;
    }
    
    /**
     * @return string
     */
    public function getInformation(): ?string
    {
        return $this->information;
    }
    
    /**
     * @param string $information
     */
    public function setInformation(?string $information): void
    {
        $this->information = $information;
    }
}