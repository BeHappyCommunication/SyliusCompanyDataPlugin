<?php

declare(strict_types = 1);

namespace BeHappy\SyliusCompanyDataPlugin\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Sylius\Component\Core\Model\Channel;
use Sylius\Component\Core\Model\ChannelInterface;

/**
 * Class CompanyData
 *
 * @package BeHappy\SyliusCompanyDataPlugin\Entity
 */
class CompanyData implements CompanyDataInterface
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
    /** @var ArrayCollection|ChannelInterface[]|null */
    protected $channels = null;
    
    /**
     * CompanyData constructor.
     */
    public function __construct()
    {
        $this->channels = new ArrayCollection();
    }

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

    /**
     * @return Collection|ChannelInterface[]
     */
    public function getChannels(): Collection
    {
        return $this->channels;
    }

    /**
     * @param ArrayCollection|ChannelInterface[] $channels
     */
    public function setChannels(ArrayCollection $channels): void
    {
        $this->channels = $channels;
    }
    
    /**
     * @param ChannelInterface $channel
     *
     * @return bool
     */
    public function addChannel(ChannelInterface $channel): bool
    {
        if (!$this->getChannels()->contains($channel)) {
            $this->channels->add($channel);
        }
        
        return true;
    }
    
    /**
     * @param ChannelInterface $channel
     *
     * @return bool
     */
    public function removeChannel(ChannelInterface $channel): bool
    {
        return $this->channels->removeElement($channel);
    }
}