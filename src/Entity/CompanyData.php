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
class CompanyData extends BaseCompanyData implements CompanyDataInterface
{
    /** @var ArrayCollection|Channel[]|null */
    protected $channels = null;
    
    /**
     * CompanyData constructor.
     */
    public function __construct()
    {
        $this->channels = new ArrayCollection();
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
     *
     * @return CompanyData
     */
    public function setChannels(ArrayCollection $channels): self
    {
        $this->channels = $channels;
        
        return $this;
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