<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MarketplaceTrials
 *
 * @ORM\Table(name="marketplace_trials", indexes={@ORM\Index(name="index_marketplace_trials_on_created_at", columns={"created_at"}), @ORM\Index(name="index_marketplace_trials_on_community_id", columns={"community_id"})})
 * @ORM\Entity
 */
class MarketplaceTrials
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="community_id", type="integer", nullable=false)
     */
    private $communityId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    private $expiresAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;


}
