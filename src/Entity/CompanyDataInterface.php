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
interface CompanyDataInterface extends BaseCompanyDataInterface
{
    /**
     * @return Collection
     */
    public function getChannels(): Collection;
    
    /**
     * @param ChannelInterface $channel
     *
     * @return bool
     */
    public function addChannel(ChannelInterface $channel): bool;
    
    /**
     * @param ChannelInterface $channel
     *
     * @return bool
     */
    public function removeChannel(ChannelInterface $channel): bool;
}